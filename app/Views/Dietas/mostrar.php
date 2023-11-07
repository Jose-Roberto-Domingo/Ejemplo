<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Tabla Dietas</h2>
            <a role="button" class="btn btn-info" href="<?= base_url('index.php/Dietas/agregar'); ?>">Agregar</a>
                <table class="table table-striped table-hover" border="2">
                    <thead class="table-dark">
                        <th>Dieta</th>
                        <th>Restricciones</th>
                        <th>Cuidados Especiales</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                    <?php foreach($dietas as $dieta):?>
                            <tr>
                                <th><?=$dieta->dieta?></th>
                                <th><?=$dieta->restricciones?></th>
                                <th><?=$dieta->cuidadosEspeciales?></th>
                                <th>
                                    <a class="btn btn-danger" role="button" href="<?= base_url('index.php/Dietas/delete/'. $dieta->idDieta); ?>">Eliminar</a>
                                    <a class="btn btn-warning" role="button" href="<?= base_url('index.php/Dietas/editar/'. $dieta->idDieta); ?>">Editar</a>
                                </th>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
        </div>
    </div>
</div>