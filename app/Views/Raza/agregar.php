<div class="container">
    <div class="row">
    <?php
            if (isset($validation)) {
                print $validation->listErrors();
            }
        ?>
        <div class="col-8">
            <form action="<?= base_url('Raza/insert'); ?>" method="POST">
            <?= csrf_field() ?>
            
            <div class="mb-3">
                    <label for="tipoAnimal" class="form-label">Tipo de Animal</label>
                    <input type="text" minlength="3" maxlength="50" class="form-control" name="tipoAnimal" id="tipoAnimal" required="required">
                </div>
                
                <div class="mb-3">
                    <label for="raza" class="form-label">Raza</label>
                    <input type="text" minlength="3" maxlength="10" class="form-control" name="raza" id="raza" required="required">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>