localStorage.setItem("state", "ReadyState");

function play() {
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "state/pressPlay";

  var strData = "estado=" + localStorage.getItem("state");
  console.log(strData);

  request.open("POST", ajaxUrl, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(strData);
  // console.log(request);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var objData = JSON.parse(request.responseText);
      if (objData.status) {
        if (objData["data"]["from"]) {
          $("#resultado").append(`<p>DE: ${objData["data"]["from"]}</p>`);
        }
        if (objData["data"]["to"]) {
          localStorage.setItem("state", objData["data"]["to"]);

          $("#resultado").append(`<p>A: ${objData["data"]["to"]}</p>`);
        }
        if (objData["data"]["estado"]) {
          $("#resultado").append(`<p>${objData["data"]["estado"]}</p>`);
        }
        $("#resultado").append("<hr>");

        estado = "play";
        cleanButtons();
        $("#btn-play").addClass("btn-state");
      }
    }
  };
}

function lock() {
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "state/pressLock";

  var strData = "estado=" + localStorage.getItem("state");
  console.log(typeof localStorage.getItem("state"));

  request.open("POST", ajaxUrl, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(strData);
  // console.log(request);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var objData = JSON.parse(request.responseText);
      if (objData.status) {
        if (objData["data"]["from"]) {
          $("#resultado").append(`<p>DE: ${objData["data"]["from"]}</p>`);
        }
        if (objData["data"]["to"]) {
          localStorage.setItem("state", objData["data"]["to"]);

          $("#resultado").append(`<p>A: ${objData["data"]["to"]}</p>`);
        }
        if (objData["data"]["estado"]) {
          $("#resultado").append(`<p>${objData["data"]["estado"]}</p>`);
        }
        $("#resultado").append("<hr>");

        estado = "play";
        cleanButtons();
        $("#btn-lock").addClass("btn-state");
      }
    }
  };
}
function previous() {
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "state/pressPrevious";

  var strData = "estado=" + localStorage.getItem("state");
  console.log(strData);

  request.open("POST", ajaxUrl, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(strData);
  // console.log(request);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var objData = JSON.parse(request.responseText);
      if (objData.status) {
        if (objData["data"]["from"]) {
          $("#resultado").append(`<p>DE: ${objData["data"]["from"]}</p>`);
        }
        if (objData["data"]["to"]) {
          localStorage.setItem("state", objData["data"]["to"]);

          $("#resultado").append(`<p>A: ${objData["data"]["to"]}</p>`);
        }
        if (objData["data"]["estado"]) {
          $("#resultado").append(`<p>${objData["data"]["estado"]}</p>`);
        }
        $("#resultado").append("<hr>");

        estado = "play";
        cleanButtons();
        $("#btn-previous").addClass("btn-state");
      }
    }
  };
}
function next() {
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "state/pressNext";

  var strData = "estado=" + localStorage.getItem("state");
  console.log(strData);

  request.open("POST", ajaxUrl, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(strData);
  // console.log(request);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var objData = JSON.parse(request.responseText);
      if (objData.status) {
        if (objData["data"]["from"]) {
          $("#resultado").append(`<p>DE: ${objData["data"]["from"]}</p>`);
        }
        if (objData["data"]["to"]) {
          localStorage.setItem("state", objData["data"]["to"]);

          $("#resultado").append(`<p>A: ${objData["data"]["to"]}</p>`);
        }
        if (objData["data"]["estado"]) {
          $("#resultado").append(`<p>${objData["data"]["estado"]}</p>`);
        }
        $("#resultado").append("<hr>");

        estado = "play";
        cleanButtons();
        $("#btn-next").addClass("btn-state");
      }
    }
  };
}
function cleanButtons() {
  if ($("#btn-play").hasClass("btn-state")) {
    $("#btn-play").removeClass("btn-state");
  }
  if ($("#btn-lock").hasClass("btn-state")) {
    $("#btn-lock").removeClass("btn-state");
  }
  if ($("#btn-previous").hasClass("btn-state")) {
    $("#btn-previous").removeClass("btn-state");
  }
  if ($("#btn-next").hasClass("btn-state")) {
    $("#btn-next").removeClass("btn-state");
  }
}
