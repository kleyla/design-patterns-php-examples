<?php headerPublic($data); ?>

<div class="container">
    <h1><?= $data["pattern"] ?></h1>

    <div class="row">
        <div class="col-6">
            <form id="formRounded">
                <h5>Hole</h5>
                <div class="circle bg-red"></div><br>
                <div>
                    <label for="holeRadius">Radio del hoyo</label>
                    <input type="number" name="holeRadius" id="holeRadius">
                </div>
                <br>
                <div>
                    <label for="pegRadius">Radio de la clavija</label>
                    <input type="number" name="pegRadius" id="pegRadius">
                </div>
                <br>
                <button type="submit">Calcular</button>
            </form>

            <div>
                <h6>Resultado</h6>
                <div id="resultadoRounded"></div>
            </div>
        </div>

        <div class="col-6">
            <form id="formSquare">
                <h5>Square</h5>
                <div class="square bg-blue"></div>
                <br>
                <div>
                    <label for="holeRadius2">Radio del hoyo</label>
                    <input type="number" name="holeRadius2" id="holeRadius2">
                </div>
                <br>
                <div>
                    <label for="squareWidth">Longitud de la clavija cuadrada</label>
                    <input type="number" name="squareWidth" id="squareWidth">
                </div><br>

                <button type="submit">Calcular</button>
            </form>

            <div>
                <h6>Resultado</h6>
                <div id="resultadoSquare"></div>
            </div>
        </div>
    </div>

</div>

<?php footerPublic($data); ?>