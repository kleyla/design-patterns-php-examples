<?php headerPublic($data); ?>

<div class="container">
    <h1><?= $data["pattern"] ?></h1>
    <h3>Resultado</h3>
    <h4>Datos:</h4>
    <p>Clase: <?= $data["response"] ?></p>
</div>

<?php footerPublic($data); ?>