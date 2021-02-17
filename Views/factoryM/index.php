<?php headerPublic($data); ?>

<div class="container">
    <h1><?= $data["pattern"] ?></h1>

    <div>
        <button onclick="btn_html()">Boton html</button>
        <button onclick="btn_windows()">Boton windows</button>
    </div>

    <div>
        <h6>Resultado</h6>
        <div id="resultado"></div>
    </div>
</div>

<?php footerPublic($data); ?>