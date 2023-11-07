<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar Mascota</h2>
            <form action="<?= base_url('Mascota/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="idMascota" value="<?= $mascota->idMascota ?>"> 

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" minlength="3" maxlength="10" class="form-control" name="nombre" id="nombre" value="<?=$mascota->nombre?>" required="required">
                </div>  

                <div class="mb-3">
                    <label for="tipoAnimal" class="form-label">Tipo de Animal</label>
                    <input type="text" minlength="3" maxlength="10" class="form-control" name="tipoAnimal" id="tipoAnimal" required="required" value="<?=$mascota->tipoAnimal ?>">
                </div>

                <div class="mb-3">
                    <label for="raza" class="form-label">Raza</label>
                    <input type="text" minlength="3" maxlength="50" class="form-control" name="raza" id="raza" value="<?= $mascota->raza?>" required="required">
                </div>

                <div class="mb-3">
                    <label for="dieta" class="form-label">Dieta</label>
                    <input type="text" minlength="3" maxlength="100" class="form-control" name="dieta" id="dieta" value="<?= $mascota->dieta?>" required="required">
                </div>

                <div class="mb-3">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" class="form-control">
                        <?php if($mascota->estado == "Adoptado"): ?>
                        <option value="Adoptado" selected>Adoptado</option>
                        <option value="Sin Dueño" >Sin Dueño</option>
                        <?php else: ?>
                        <option value="Adoptado" >Adoptado</option>
                        <option value="Sin Dueño" selected>Sin Dueño</option>
                        <?php endif ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="adoptador" class="form-label">Adoptador</label>
                    <input type="text" minlength="3" maxlength="50" class="form-control" name="adoptador" id="adoptador" value="<?= $mascota->adoptador?>" >
                </div>
                
                <div class="mb-3">
                    <label for="cuidadosEspeciales" class="form-label">Cuidados Especiales</label>
                    <input type="text" minlength="3" maxlength="100" class="form-control" name="cuidadosEspeciales" id="cuidadosEspeciales" value="<?= $mascota->cuidadosEspeciales?>" required="required">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>