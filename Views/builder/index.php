<?php headerPublic($data); ?>

<div class="container">
    <h1><?= $data["pattern"] ?></h1>

    <div class="row">
        <div class="col-6">
            <button onclick="car_sport()" class="btn-blue">Auto deportivo</button>
            <button onclick="car_suv()" class="btn-red">Auto SUV</button>

            <div>
                <h6>Resultado Autos</h6>
                <div id="resultadoCar"></div>
            </div>
        </div>

        <div class="col-6">
            <button onclick="manual_sport()" class="btn-blue">Manual Sport</button>
            <button onclick="manual_suv()" class="btn-red">Manual SUV</button>

            <div>
                <h6>Resultado Manuales</h6>
                <div id="resultadoManual"></div>
            </div>
        </div>
    </div>

</div>

<?php footerPublic($data); ?>