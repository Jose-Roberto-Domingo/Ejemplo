<div class="container">
    <div class="row">
    <?php
            if (isset($validation)) {
                print $validation->listErrors();
            }
        ?>
        <div class="col-8">
            <form action="<?= base_url('Adoptador/insert'); ?>" method="POST">
            <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" minlength="3" maxlength="100" class="form-control" name="nombre" id="nombre" required="required">
                </div>

                <div class="mb-3">
                    <label for="teléfono" class="form-label">Teléfono</label>
                    <input type="number" minlength="3" maxlength="11" class="form-control" name="teléfono" id="teléfono" required="required">
                </div>
                
                <div class="mb-3">
                    <label for="dirección" class="form-label">Direccioón</label>
                    <input type="text" minlength="3" maxlength="150" class="form-control" name="dirección" id="dirección" required="required">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>