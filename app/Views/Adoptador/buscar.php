<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('index.php/Adoptador/buscar/'); ?>" method="GET">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <table class="table table-striped table-hover"border="2">
                <thead class="table-dark">
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                </thead>
                <tbody>
                    <?php foreach($adoptador as $adop): ?>
                    <tr>
                        <th><?=$adop->nombre?></th>
                        <th><?=$adop->teléfono?></th>
                        <th><?=$adop->dirección?></th>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>