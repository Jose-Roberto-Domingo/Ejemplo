<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('index.php/Raza/buscar/'); ?>" method="GET">
                <label for="tipoAnimal">Tipo de Animal</label>
                <input type="text" class="form-control" name="tipoAnimal">
                <label for="raza">Raza</label>
                <input type="text" class="form-control" name="raza">
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <table class="table table-striped table-hover"border="2">
                <thead class="table-dark">
                    <th>Tipo de Animal</th>
                    <th>Raza</th>
                </thead>
                <tbody>
                    <?php foreach($razas as $raza): ?>
                    <tr>
                        <th><?=$raza->tipoAnimal?></th>
                        <th><?=$raza->raza?></th>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>