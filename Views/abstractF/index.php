<?php headerPublic($data); ?>

<div class="container">
    <h1><?= $data["pattern"] ?></h1>

    <div class="row">
        <div class="col-6">
            <button onclick="btn_mac()">Boton mac</button>
            <button onclick="btn_windows()">Boton windows</button>

            <div>
                <h6>Resultado Botones</h6>
                <div id="resultadoBtn"></div>
            </div>
        </div>

        <div class="col-6">
            <button onclick="checkbox_mac()">Checkbox mac</button>
            <button onclick="checkbox_windows()">Checkbox windows</button>

            <div>
                <h6>Resultado Checkboxes</h6>
                <div id="resultadoCheckbox"></div>
            </div>
        </div>
    </div>


</div>

<?php footerPublic($data); ?>