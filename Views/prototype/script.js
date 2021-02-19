function php_books() {
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "prototype/getPhpBooks";
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
        $("#resultadoPhpBooks").append(`<div>${objData["data"]}</div><hr>`);
      }
    }
  };
}

function sql_books() {
  var request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  var ajaxUrl = base_url + "prototype/getSqlBooks";
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
        $("#resultadoSqlBooks").append(`<div>${objData["data"]}</div><hr>`);
      }
    }
  };
}
