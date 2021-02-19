<?php headerPublic($data); ?>

<div class="container">
    <h1><?= $data["pattern"] ?></h1>

    <div class="row">
        <div class="col-6">
            <button onclick="php_books()">PHP Books</button>

            <div>
                <h6>Resultado Autos</h6>
                <div id="resultadoPhpBooks"></div>
            </div>
        </div>

        <div class="col-6">
            <button onclick="sql_books()">SQL Books</button>

            <div>
                <h6>Resultado Manuales</h6>
                <div id="resultadoSqlBooks"></div>
            </div>
        </div>
    </div>

</div>

<?php footerPublic($data); ?>