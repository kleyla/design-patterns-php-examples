$(document).ready(function () {
  console.log("Ready");
});
function btn_html() {
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "factoryM/buttonWeb";
  var order = "web";
  var strData = "order=" + order;

  request.open("POST", ajaxUrl, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(strData);
  // console.log(request);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var objData = JSON.parse(request.responseText);
      if (objData.status) {
        $("#resultado").append(`<div>${objData["data"]}</div><hr>`);
      }
    }
  };
}

function btn_windows() {
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "factoryM/buttonWindows";
  var order = "windows";
  var strData = "order=" + order;

  request.open("POST", ajaxUrl, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(strData);
  // console.log(request);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var objData = JSON.parse(request.responseText);
      if (objData.status) {
        $("#resultado").append(`<div>${objData["data"]}</div><hr>`);
      }
    }
  };
}
