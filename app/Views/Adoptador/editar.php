<div class="container">
    <div class="row"> 
        <div class="col-8">
            <h2>Editar Adoptador</h2>
            <form action="<?= base_url('Adoptador/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="idAdoptador" value="<?= $adoptador->idAdoptador ?>">
            <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" minlength="3" maxlength="100" class="form-control" name="nombre" id="nombre" value="<?= $adoptador->nombre?>" required="required">
                </div>

                <div class="mb-3">
                    <label for="teléfono" class="form-label">Teléfono</label>
                    <input type="text" minlength="3" maxlength="12" class="form-control" name="teléfono" id="teléfono" value="<?= $adoptador->teléfono?>" required="required">
                </div>
                
                <div class="mb-3">
                    <label for="dirección" class="form-label">Dirección</label>
                    <input type="text" minlength="3" maxlength="150" class="form-control" name="dirección" id="dirección" value="<?= $adoptador->dirección?>" required="required">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>