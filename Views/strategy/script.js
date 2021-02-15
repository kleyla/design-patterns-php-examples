$("#formAsc").submit(function (event) {
  event.preventDefault();
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "strategy/asc";
  console.log(ajaxUrl);
  request.open("POST", ajaxUrl, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  console.log(request);
  request.onreadystatechange = function () {
    console.log(request.responseText);
    var objData = JSON.parse(request.responseText);
    if (objData.status) {
      console.log("ok");
      $("#resultado").append("<p>hi</p>");
      // ${objData['data']}
    } else {
      console.log("false");
    }
  };
});

function asc() {
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "strategy/asc";
  var order = "asc";
  var strData = "order=" + order;

  request.open("POST", ajaxUrl, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(strData);
  // console.log(request);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var objData = JSON.parse(request.responseText);
      if (objData.status) {
        $("#resultado").append(`<p>${objData["data"]}</p>`);
      }
    }
  };
}

function desc() {
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "strategy/desc";
  var order = "desc";
  var strData = "order=" + order;

  request.open("POST", ajaxUrl, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(strData);
  // console.log(request);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var objData = JSON.parse(request.responseText);
      if (objData.status) {
        $("#resultado").append(`<p>${objData["data"]}</p>`);
      }
    }
  };
}
