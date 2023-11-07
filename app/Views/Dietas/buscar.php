<div class="container">
    <div class="row">
        <div class="col-7">
            <form action="<?= base_url('index.php/Dietas/buscar/'); ?>" method="GET">
                <label for="dieta">Dieta</label>
                <input type="text" class="form-control" name="dieta">
                <label for="restricciones">Restricciones</label>
                <input type="text" class="form-control" name="restricciones">
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover" border="2">
                <thead class="table-dark">
                    <th>Dieta</th>
                    <th>Restricciones</th>
                    <th>Cuidados Especiales</th>
                </thead>
                <tbody>
                    <?php foreach($dietas as $dieta): ?>
                    <tr>
                        <th><?=$dieta->dieta?></th>
                        <th><?=$dieta->restricciones?></th>
                        <th><?=$dieta->cuidadosEspeciales?></th>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>