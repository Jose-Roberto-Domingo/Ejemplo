<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar Raza</h2>
            <form action="<?= base_url('Raza/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="idRaza" value="<?= $razas->idRaza ?>">    
            <div class="mb-3">
                    <label for="tipoAnimal" class="form-label">Tipo de Animal</label>
                    <input type="text" minlength="3" maxlength="10" class="form-control" name="tipoAnimal" id="tipoAnimal" required="required" value="<?=$razas->tipoAnimal ?>">
                </div>

                <div class="mb-3">
                    <label for="raza" class="form-label">Raza</label>
                    <input type="text" minlength="3" maxlength="50" class="form-control" name="raza" id="raza" value="<?= $razas->raza?>" required="required">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>