window.addEventListener("load", () => {
  let xhr = new XMLHttpRequest();

  xhr.onload = (e) => {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        let data = xhr.response;
        data = JSON.parse(data);
        console.log(data);
        let i = 0;
        printQuestion(data, i);
        document.getElementById("content").addEventListener("click", (e) => {
          if (e.target.id === "next") {
            i++;
            if (i < data.length) {
              printQuestion(data, i);
            } else {
              console.log("No more questions.");
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
  document.getElementById("content").innerHTML = `
        <div class="w-full p-2 border-2 border-gray-400 rounded-xl shadow-xl">
            <p>${data[i].content}</p>
        </div>
        <div class="grid grid-cols-2 gap-4 md:gap-8 w-full child:p-2 child:border child:border-gray-400 child:shadow-lg child:rounded-lg">
            <div>${data[i].answers[0].content}</div>
            <div>${data[i].answers[1].content}</div>
            <div>${data[i].answers[2].content}</div>
            <div>${data[i].answers[3].content}</div>
        </div>
        
        `;
  if (i !== 9) {
    document.getElementById("content").innerHTML += `
        <div class="self-end">
            <button id="next" class="p-1 px-4 bg-[#ff9900] border border-black rounded-xl">Next</button>
        </div>
        `;
  } else {
    document.getElementById("content").innerHTML += `
        <div class="self-end">
            <button id="result" class="p-1 px-4 bg-[#ff9900] border border-black rounded-xl">Results ></button>
        </div>
        `;
  }
}
