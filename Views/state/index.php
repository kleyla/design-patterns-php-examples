<?php headerPublic($data); ?>

<div class="container">
    <h1>State</h1>

    <h2>Reproductor</h2>

    <div>
        <button onclick="play()" id="btn-play">Play</button>
        <button onclick="lock()" id="btn-lock">Lock</button>
        <button onclick="previous()" id="btn-previous">Previous</button>
        <button onclick="next()" id="btn-next">Next</button>
    </div>

    <div>
        <h5>Estado</h5>
        <div id="resultado">
            <hr>
        </div>
    </div>
</div>

<?php footerPublic($data); ?>