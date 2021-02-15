<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategy</title>
</head>

<body>
    <h1>Strategy</h1>
    <h2>["a", "b", "c", "d", "e"]</h2>

    <button onclick="asc()">Ascending</button>
    <button onclick="desc()">Descending</button>

    <h3><?= $data["response"] ?></h3>
    <h4>Datos:</h4>
    <p>Clase: <?= $data["clase"] ?></p>

    <?php if (array_key_exists("asc", $data) && array_key_exists("desc", $data)) { ?>
        <h6>Orden Ascendente</h6>
        <p><?= dep($data["asc"]) ?></p>
        <h6>Orden Descendente</h6>
        <p><?= dep($data["desc"]) ?></p>
    <?php } ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

    <script>
        function asc() {
            formLenguaje.onsubmit = function(e) {
                console.log("IN...");
                e.preventDefault();

                var request = window.XMLHttpRequest ?
                    new XMLHttpRequest() :
                    new ActiveXObject("Microsoft.XMLHTTP");
                var ajaxUrl = base_url + "strategy/ascendent";

                request.open("POST", ajaxUrl, true);
                // console.log(request);
                request.onreadystatechange = function() {
                    if (request.readyState == 4 && request.status == 200) {
                        // console.log(request.responseText);
                        var objData = JSON.parse(request.responseText);

                    }
                };
            };
        }

        function desc() {

        }
    </script>
</body>

</html>