<?php headerPublic($data); ?>

<div class="container">
    <h1>Strategy</h1>

    <h2>["d", "e", "a", "b", "c"]</h2>

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

<?php footerPublic($data); ?>