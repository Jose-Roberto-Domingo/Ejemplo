<div class="container">
<div class="row">
        <div class="col-8">
            <h2>Tabla Razas</h2>
            <a role="button" class="btn btn-info" href="<?= base_url('index.php/Raza/agregar'); ?>">Agregar</a>
                <table class="table table-striped table-hover" border="2">
                    <thead class="table-dark">
                        <th>Tipo de Animal</th>
                        <th>Raza</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                    <?php foreach($razas as $raza):?>
                            <tr>
                                <th><?=$raza->tipoAnimal?></th>
                                <th><?=$raza->raza ?></th>
                                <th>
                                    <a class="btn btn-danger" role="button" href="<?= base_url('index.php/Raza/delete/'. $raza->idRaza); ?>">Eliminar</a>
                                    <a class="btn btn-warning" role="button" href="<?= base_url('index.php/Raza/editar/'. $raza->idRaza); ?>">Editar</a>
                                </th>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>