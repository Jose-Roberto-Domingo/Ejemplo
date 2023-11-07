<div class="container">
    <div class="row">
    <?php
            if (isset($validation)) {
                print $validation->listErrors();
            }
        ?>
        <div class="col-8">
            <form action="<?= base_url('Dietas/insert'); ?>" method="POST">
            <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="dieta" class="form-label">Dieta</label>
                    <input type="text" minlength="3" maxlength="100" class="form-control" name="dieta" id="dieta" required="required">
                </div>

                <div class="mb-3">
                    <label for="restricciones" class="form-label">Restricciones</label>
                    <input type="text" minlength="3" maxlength="150" class="form-control" name="restricciones" id="adoptador" required="required">
                </div>
                
                <div class="mb-3">
                    <label for="cuidadosEspeciales" class="form-label">Cuidados Especiales</label>
                    <input type="text" minlength="3" maxlength="150" class="form-control" name="cuidadosEspeciales" id="cuidadosEspeciales" required="required">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>