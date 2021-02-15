<?php headerPublic($data); ?>

<div class="container">
    <h1>Template Method</h1>

    <div class="row">
        <div class="col-6">
            <h4>Resultado Monsters </h4>
            <div id="resultado"></div>
            <?php foreach ($data['data-monster'] as $item) { ?>
                <p><?= $item ?></p>
            <?php } ?>
        </div>
        <div class="col-6">
            <h4>Resultado Orcos </h4>
            <div id="resultado"></div>
            <?php foreach ($data['data-orco'] as $item) { ?>
                <p><?= $item ?></p>
            <?php } ?>
        </div>

    </div>
    <!-- <div><?= dep($data) ?></div> -->
</div>

<?php footerPublic($data); ?>