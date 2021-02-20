$("#formRounded").submit(function (event) {
  event.preventDefault();
  console.log("Submited");

  var formRounded = document.querySelector("#formRounded");

  var holeRadius = document.querySelector("#holeRadius").value;
  var pegRadius = document.querySelector("#pegRadius").value;

  if (holeRadius == "" || pegRadius == "") {
    alert("Todos los campos son obligatorios");
    return false;
  }
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "adapter/round";
  var formData = new FormData(formRounded);
  request.open("POST", ajaxUrl, true);
  request.send(formData);
  // console.log(request);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      // console.log(request.responseText);
      var objData = JSON.parse(request.responseText);
      if (objData.status) {
        $("#resultadoRounded").append(`<div>${objData["data"]}</div><hr>`);
      }
    }
  };
});

$("#formSquare").submit(function (event) {
  event.preventDefault();

  var formSquare = document.querySelector("#formSquare");

  var holeRadius2 = document.querySelector("#holeRadius2").value;
  var squareWidth = document.querySelector("#squareWidth").value;

  if (holeRadius2 == "" || squareWidth == "") {
    alert("Todos los campos son obligatorios");
    return false;
  }
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "adapter/square";
  var formData = new FormData(formSquare);
  request.open("POST", ajaxUrl, true);
  request.send(formData);
  // console.log(request);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      // console.log(request.responseText);
      var objData = JSON.parse(request.responseText);
      if (objData.status) {
        $("#resultadoSquare").append(`<div>${objData["data"]}</div><hr>`);
      }
    }
  };
});
