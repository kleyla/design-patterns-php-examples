<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategy</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Strategy</h1>

        <h2>["a", "b", "c", "d", "e"]</h2>

        <!-- <form id="formAsc" name="formAsc">
                <input type="text" name="data1[]">
                <button type="submit">Ascending</button>
            </form>

            <form id="formDesc" name="formDesc">
                <input type="text" name="data2[]">
                <button type="submit">Descending</button>
            </form> -->

        <div>

            <button onclick="asc()">Ascending</button>
            <button onclick="desc()">Descending</button>
        </div>

        <div>
            <h6>Resultado</h6>
            <div id="resultado"></div>
        </div>
    </div>

    <?php if (array_key_exists("asc", $data) && array_key_exists("desc", $data)) { ?>
        <h6>Orden Ascendente</h6>
        <p><?= dep($data["asc"]) ?></p>
        <h6>Orden Descendente</h6>
        <p><?= dep($data["desc"]) ?></p>
    <?php } ?>

    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

    <script>
        $("#formAsc").submit(function(event) {
            event.preventDefault();
            var request = window.XMLHttpRequest ?
                new XMLHttpRequest() :
                new ActiveXObject("Microsoft.XMLHTTP");
            var ajaxUrl = base_url + "strategy/asc";
            console.log(ajaxUrl);
            request.open("POST", ajaxUrl, true);
            request.setRequestHeader(
                "Content-type",
                "application/x-www-form-urlencoded"
            );
            console.log(request);
            request.onreadystatechange = function() {
                console.log(request.responseText);
                var objData = JSON.parse(request.responseText);
                if (objData.status) {
                    console.log("ok");
                    $("#resultado").append("<p>hi</p>");
                    // ${objData['data']}
                } else {
                    console.log("false");
                }

            }
        });

        function asc() {
            var request = window.XMLHttpRequest ?
                new XMLHttpRequest() :
                new ActiveXObject("Microsoft.XMLHTTP");
            var ajaxUrl = base_url + "strategy/asc";
            var order = 'asc';
            var strData = "order=" + order;

            request.open("POST", ajaxUrl, true);
            request.setRequestHeader(
                "Content-type",
                "application/x-www-form-urlencoded",
            );
            request.send(strData);
            // console.log(request);
            request.onreadystatechange = function() {
                if (request.readyState == 4 && request.status == 200) {
                    var objData = JSON.parse(request.responseText);
                    if (objData.status) {
                        $("#resultado").append(`<p>${objData['data']}</p>`);

                    }
                }
            };
        }

        function desc() {
            var request = window.XMLHttpRequest ?
                new XMLHttpRequest() :
                new ActiveXObject("Microsoft.XMLHTTP");
            var ajaxUrl = base_url + "strategy/desc";
            var order = 'desc';
            var strData = "order=" + order;

            request.open("POST", ajaxUrl, true);
            request.setRequestHeader(
                "Content-type",
                "application/x-www-form-urlencoded",
            );
            request.send(strData);
            // console.log(request);
            request.onreadystatechange = function() {
                if (request.readyState == 4 && request.status == 200) {
                    var objData = JSON.parse(request.responseText);
                    if (objData.status) {
                        $("#resultado").append(`<p>${objData['data']}</p>`);

                    }
                }
            };
        }
    </script>
</body>

</html>