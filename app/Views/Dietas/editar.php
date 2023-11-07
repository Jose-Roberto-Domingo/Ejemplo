<div class="container">
    <div class="row">
    
        <div class="col-8">
            <h2>Editar Materia</h2>
            <form action="<?= base_url('Dietas/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="idDieta" value="<?= $dietas->idDieta ?>">
            <div class="mb-3">
                    <label for="dieta" class="form-label">Dieta</label>
                    <input type="text" minlength="3" maxlength="100" class="form-control" name="dieta" id="dieta" value="<?= $dietas->dieta?>" required="required">
                </div>

                <div class="mb-3">
                    <label for="restricciones" class="form-label">Restricciones</label>
                    <input type="text" minlength="3" maxlength="150" class="form-control" name="restricciones" id="adoptador" value="<?= $dietas->restricciones?>" required="required">
                </div>
                
                <div class="mb-3">
                    <label for="cuidadosEspeciales" class="form-label">Cuidados Especiales</label>
                    <input type="text" minlength="3" maxlength="150" class="form-control" name="cuidadosEspeciales" id="cuidadosEspeciales" value="<?= $dietas->cuidadosEspeciales?>" required="required">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>