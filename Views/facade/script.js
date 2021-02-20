$("#formConvert").submit(function (event) {
  event.preventDefault();
  console.log("Submited");

  var formConvert = document.querySelector("#formConvert");

  var filename = document.querySelector("#filename").value;

  if (filename == "") {
    alert("Todos los campos son obligatorios");
    return false;
  }
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "facade/convert";
  var formData = new FormData(formConvert);
  request.open("POST", ajaxUrl, true);
  request.send(formData);
  // console.log(request);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      // console.log(request.responseText);
      var objData = JSON.parse(request.responseText);
      if (objData.status) {
        $("#resultado").append(`<div>${objData["data"]}</div><hr>`);
      }
    }
  };
});
