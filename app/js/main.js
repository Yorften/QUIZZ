window.addEventListener("load", () => {
  let xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
      if (xmlhttp.status == 200) {
        let data = xhr.response;
        console.log(data);
      } else if (xmlhttp.status == 400) {
        alert("There was an error 400");
      } else {
        alert("something else other than 200 was returned");
      }
    }
  };
});
