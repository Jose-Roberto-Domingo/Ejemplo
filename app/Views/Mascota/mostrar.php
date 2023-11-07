<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Tabla Mascotas</h2>
            <a role="button" class="btn btn-info" href="<?= base_url('index.php/Mascota/agregar'); ?>">Agregar</a>
                <table class="table table-striped table-hover" border="2">
                    <thead class="table-dark">
                        <th>Nombre</th>
                        <th>Tipo de Animal</th>
                        <th>Raza</th>
                        <th>Dieta</th>
                        <th>Estado</th>
                        <th>Adoptador</th>
                        <th>Cuidados Especiales</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                    <?php foreach($mascotas as $mascota):?>
                            <tr>
                                <th><?=$mascota->nombre?></th>
                                <th><?=$mascota->tipoAnimal?></th>
                                <th><?=$mascota->raza ?></th>
                                <th><?=$mascota->dieta?></th>
                                <th><?=$mascota->estado?></th>
                                <th><?=$mascota->adoptador?></th>
                                <th><?=$mascota->cuidadosEspeciales?></th>
                                <th>
                                    <a class="btn btn-danger" role="button" href="<?= base_url('index.php/Mascota/delete/'. $mascota->idMascota); ?>">Eliminar</a>
                                    <a class="btn btn-warning" role="button" href="<?= base_url('index.php/Mascota/editar/'. $mascota->idMascota); ?>">Editar</a>
                                </th>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
        </div>
    </div>
</div>