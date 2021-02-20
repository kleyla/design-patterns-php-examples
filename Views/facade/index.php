<?php headerPublic($data); ?>

<div class="container">
    <h1><?= $data["pattern"] ?></h1>

    <form id="formConvert">
        <h5>Conversor de Ogg. a MP4 o viceversa</h5>

        <div>
            <label for="filename">Archivo</label>
            <input type="text" name="filename" id="filename">
        </div>
        <br>
        <div>
            <select name="format" id="format">
                <option value="ogg">OGG</option>
                <option value="mp4">MP4</option>
            </select>
        </div>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <div>
        <h6>Resultado</h6>
        <div id="resultado"></div>
    </div>


</div>

<?php footerPublic($data); ?>