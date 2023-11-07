<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Tabla Adoptador</h2>
            <a role="button" class="btn btn-info" href="<?= base_url('index.php/Adoptador/agregar'); ?>">Agregar</a>
                <br><table class="table table-striped table-hover" border="2">
                    <thead class="table-dark">
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                    <?php foreach($adoptador as $adop):?>
                            <tr>
                                <th><?=$adop->nombre?></th>
                                <th><?=$adop->teléfono?></th>
                                <th><?=$adop->dirección?></th>
                                <th>
                                    <a class="btn btn-danger" role="button" href="<?= base_url('index.php/Adoptador/delete/'. $adop->idAdoptador); ?>">Eliminar</a>
                                    <a class="btn btn-warning" role="button" href="<?= base_url('index.php/Adoptador/editar/'. $adop->idAdoptador); ?>">Editar</a>
                                </th>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
        </div>
    </div>
</div>