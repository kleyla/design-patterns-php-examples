function car_sport() {
    var request = window.XMLHttpRequest
      ? new XMLHttpRequest()
      : new ActiveXObject("Microsoft.XMLHTTP");
    var ajaxUrl = base_url + "builder/getSportsCar";
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
          $("#resultadoCar").append(`<div>${objData["data"]}</div><hr>`);
        }
      }
    };
  }
  
  function car_suv() {
    var request = window.XMLHttpRequest
      ? new XMLHttpRequest()
      : new ActiveXObject("Microsoft.XMLHTTP");
    var ajaxUrl = base_url + "builder/getSUVCar";
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
          $("#resultadoCar").append(`<div>${objData["data"]}</div><hr>`);
        }
      }
    };
  }
  
  function manual_sport() {
    var request = window.XMLHttpRequest
      ? new XMLHttpRequest()
      : new ActiveXObject("Microsoft.XMLHTTP");
    var ajaxUrl = base_url + "builder/getSportsCarManual";
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
          $("#resultadoManual").append(`<div>${objData["data"]}</div><hr>`);
        }
      }
    };
  }
  function manual_suv() {
    var request = window.XMLHttpRequest
      ? new XMLHttpRequest()
      : new ActiveXObject("Microsoft.XMLHTTP");
    var ajaxUrl = base_url + "builder/getSUVCarManual";
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
          $("#resultadoManual").append(`<div>${objData["data"]}</div><hr>`);
        }
      }
    };
  }
  