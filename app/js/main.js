// Progress bar

const progressbar = document.querySelector(".progress");
let progress = 0;

const changeProgress = (progress) => {
  progressbar.style.width = `${progress}%`;
};

// Refresh message
const beforeUnloadHandler = (e) => {
  e.preventDefault();
  e.returnValue = ""; // For some older browsers
};

window.addEventListener("beforeunload", beforeUnloadHandler);

window.addEventListener("load", () => {
  let xhr = new XMLHttpRequest();

  xhr.onload = (e) => {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        let data = xhr.response;
        data = JSON.parse(data);
        console.log(data);
        let i = 0;
        let score = 0;
        let results = [];
        printQuestion(data, i);
        document.getElementById("content").addEventListener("click", (e) => {
          if (e.target.id === "next") {
            if (i < data.length) {
              let answer = checkAnswer();
              if (answer) {
                i++;
                progress += 10;
                let scoreElement = document.getElementById("score");
                if (answer[0].answer == 1) {
                  score += 20;
                  scoreElement.innerHTML = score;
                }
                error.classList.remove("p-1");
                error.innerHTML = "";

                logAnswer(i - 1, data, answer, results);
                console.log(results);
                console.log(results[0].answer[0].answer);
                printQuestion(data, i);
                changeProgress(progress);
              } else {
                let error = document.getElementById("error");
                error.classList.add("p-1");
                error.innerHTML = "You need to select one answer to proceed";
                shake();
              }
            } else {
              console.log("No more questions.");
            }
          } else if (e.target.id === "result") {
            let answer = checkAnswer();
            if (answer) {
              progress += 10;
              let scoreElement = document.getElementById("score");
              if (answer[0].answer == 1) {
                score += 20;
                scoreElement.innerHTML = score;
              }
              error.classList.remove("p-1");
              error.innerHTML = "";

              logAnswer(i - 1, data, answer, results);
              console.log(results);
              changeProgress(progress);

              //RESULT PAGE
              setTimeout(() => {
                printLoggedAnswers(results, score);
              }, 1500);
            } else {
              let error = document.getElementById("error");
              error.classList.add("p-1");
              error.innerHTML = "You need to select one answer to proceed";
              shake();
            }
          }
        });
      } else {
        console.error(xhr.statusText);
      }
    }
  };
  xhr.onerror = (e) => {
    console.error(xhr.statusText);
  };
  xhr.open("GET", "/quizz/quizz/questions", true);
  xhr.send();
});

function printQuestion(data, i) {
  document.getElementById("total").classList.remove("hidden");
  document.getElementById("progress").classList.remove("hidden");
  document.getElementById("content").innerHTML = `
        <div class="w-full h-[200px] md:h-[100px] flex flex-col justify-center p-2 border-2 bg-white border-black rounded-xl shadow-xl">
            <p class="text-xl text-center">${data[i].content}</p>
        </div>
        <div class="grid grid-cols-2 gap-4 md:gap-8 w-full">
            <div class="answer">
                <input type="radio" id="tag1" name="answer" class="peer hidden" value="${data[i].answers[0].correct}">
                <label for="tag1" class="inline-block w-full h-full bg-white p-2 border shadow-xl border-black rounded-lg select-none cursor-pointer peer-checked:bg-[#ff9900]">
                ${data[i].answers[0].content}
                </label>
            </div>
            <div class="answer">
                <input type="radio" id="tag2" name="answer" class="peer hidden" value="${data[i].answers[1].correct}">
                <label for="tag2" class="inline-block w-full h-full bg-white p-2 border shadow-xl border-black rounded-lg select-none cursor-pointer peer-checked:bg-[#ff9900]">
                ${data[i].answers[1].content}
                </label>
            </div>
            <div class="answer">
                <input type="radio" id="tag3" name="answer" class="peer hidden" value="${data[i].answers[2].correct}">
                <label for="tag3" class="inline-block w-full h-full bg-white p-2 border shadow-xl border-black rounded-lg select-none cursor-pointer peer-checked:bg-[#ff9900]">
                ${data[i].answers[2].content}
                </label>
            </div>
            <div class="answer">
                <input type="radio" id="tag4" name="answer" class="peer hidden" value="${data[i].answers[3].correct}">
                <label for="tag4" class="inline-block w-full h-full bg-white p-2 border shadow-xl border-black rounded-lg select-none cursor-pointer peer-checked:bg-[#ff9900]">
                ${data[i].answers[3].content}
                </label>
            </div>
        </div>
        
        `;
  if (i !== 9) {
    document.getElementById("content").innerHTML += `
        <div class="self-end">
            <button id="next" class="p-1 px-4 bg-[#ff9900] text-lg font-medium border border-black rounded-xl">Next</button>
        </div>
        `;
  } else {
    document.getElementById("content").innerHTML += `
        <div class="self-end">
            <button id="result" class="p-1 px-4 bg-[#ff9900] text-lg font-medium border border-black rounded-xl">Results ></button>
        </div>
        `;
  }
}

function printLoggedAnswers(data, score) {
  document.getElementById("total").classList.add("hidden");
  document.getElementById("progress").classList.add("hidden");
  let content = document.getElementById("content");
  content.innerHTML = "";
  content.innerHTML += ` 
  <div class="flex flex-col justify-around bg-white rounded-lg min-h-[85vh] md:min-h-[90vh] w-full md:w-3/5 border-2 border-gray-700 p-1 py-2">
    <div class="child:text-xl child:font-semibold flex justify-between items-center px-2">
        <p>Your score: ${score}</p>
        <button onclick="window.removeEventListener('beforeunload', beforeUnloadHandler);location.reload();" class="p-1 px-4 bg-[#ff9900] text-lg font-medium border border-black rounded-xl">Try again</button>
    </div>
    <div class="flex flex-col">
    ${data
      .map(
        (dataItem) => `
                <div class="flex gap-2 items-center justify-between p-1 border border-gray-600 ${
                  dataItem.answer[0].answer == 0 ? "bg-red-500" : "bg-green-500"
                }">
                    <p>${dataItem.question}</p>
                    ${
                      dataItem.answer[0].answer == 0
                        ? '<i class="bx bx-x text-4xl"></i>'
                        : '<i class="bx bx-check text-4xl"></i>'
                    }
                </div>
            `
      )
      .join("")}
        </div>
    </div>
    `;
}

function checkAnswer() {
  var answers = document.querySelectorAll(".peer");
  const checkedValue = [];

  answers.forEach((answers) => {
    if (answers.checked) {
      let data = {
        answer: answers.value,
        answerContent: answers.nextElementSibling.innerText,
      };
      checkedValue.push(data);
    }
  });

  if (checkedValue.length !== 0) {
    console.log("data");
    return checkedValue;
  } else {
    console.log("empty");
    return false;
  }
}

function shake() {
  let elements = document.getElementsByClassName("answer");
  for (let i = 0; i < elements.length; i++) {
    elements[i].classList.remove("shake");
  }
  for (let i = 0; i < elements.length; i++) {
    void elements[i].offsetWidth;
  }
  for (let i = 0; i < elements.length; i++) {
    elements[i].classList.add("shake");
  }
}

function logAnswer(i, data, answer, results) {
  let result = {
    question: data[i].content,
    answer: answer,
  };
  results.push(result);
  return results;
}
