function printError(Id, Msg) {
  document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {
  var username = document.getElementById("username").value;

  var userErr = validateName(username);

  if (userErr) {
    console.log("true");
    return true;
  } else return false;
}

function validateName(username) {
  if (username == "" || username == null) {
    document.getElementById("userInput").classList.add("border-red-500");
    printError("userErr", "Please enter your username");
    return false;
  } else {
    var regex = /^[a-zA-Z0-9]+$/;
    if (!regex.test(username)) {
      document.getElementById("userInput").classList.add("border-red-500");
      printError(
        "userErr",
        "Please enter a valid username (no spaces/special characters)"
      );
      return false;
    } else {
      document.getElementById("userInput").classList.remove("border-red-500");
      printError("userErr", "");
      return true;
    }
  }
}

function keydownValidation() {
  var username = document.getElementById("username");
  username.addEventListener("input", function () {
    validateName(username.value);
  });
}

function initValidation() {
  var username = document.getElementById("username");

  username.addEventListener("blur", function () {
    validateName(username.value);
  });
}

initValidation();
keydownValidation();
