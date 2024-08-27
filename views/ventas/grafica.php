<h1 class="text-center mb-2 text-primary"><b>COMPRAS REALIZADAS POR CLIENTES</b></h1>
<div class="row justify-content-center">
    <div class="col-lg-3 d-flex justify-content-center align-items-center">
        <button class="btn btn-info btn-lg w-100 shadow-sm hover-shadow" type="button" id="BtnActualizar">Actualizar Gráficas</button>
    </div>
    <div class="col-lg-6 d-flex justify-content-center align-items-center">
        <canvas id="ChartVentaClientes"></canvas>
    </div>
</div>

<script src="<?= asset('./build/js/ventas/estadistica.js') ?>"></script>