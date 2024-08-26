<div class="row">
    <div class="col-4  justify-content-center">
        <h1 class="text-center mb-3"><b>COMPRAS REALIZADAS POR CLIENTES</b></h1>
        <div class="row justify-content-center mb-3">
            <div class="col-lg-4 d-flex justify-content-center">
                <button class="btn btn-info w-75" type="button" id="BtnActualizar">Actualizar Graficas</button>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <canvas id="ChartVentas"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="<?= asset('./build/js/productos/estadistica.js') ?>"></script>