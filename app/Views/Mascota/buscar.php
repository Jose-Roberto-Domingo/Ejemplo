<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('index.php/Mascota/buscar/'); ?>" method="GET">
                <label for="estado">Estado</label>
                <select name="estado" class="form-control">
                    <option value=""></option>
                    <option value="Adoptado">Adoptado</option>
                    <option value="Sin Dueño">Sin Dueño</option>
                </select>
                <label for="raza">Raza</label>
                <input type="text" class="form-control" name="raza">
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover" border="2">
                <thead class="table-dark">
                <th>Nombre</th>
                <th>Tipo de Animal</th>
                <th>Raza</th>
                <th>Dieta</th>
                <th>Estado</th>
                <th>Adoptador</th>
                <th>Cuidados Especiales</th>
                </thead>
                <tbody>
                    <?php foreach($mascota as $mascot): ?>
                    <tr>
                        <th><?=$mascot->nombre?></th>
                        <th><?=$mascot->tipoAnimal?></th>
                        <th><?=$mascot->raza ?></th>
                        <th><?=$mascot->dieta?></th>
                        <th><?=$mascot->estado?></th>
                        <th><?=$mascot->adoptador?></th>
                        <th><?=$mascot->cuidadosEspeciales?></th>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>