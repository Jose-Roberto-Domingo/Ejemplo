<div class="container">
    <div class="row">
    <?php
            if (isset($validation)) {
                print $validation->listErrors();
            }
        ?>
        <div class="col-8">
            <form action="<?= base_url('Mascota/insert'); ?>" method="POST">
            <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" minlength="3" maxlength="10" class="form-control" name="nombre" id="nombre" required="required">
                </div>
                <div class="mb-3">
                    <label for="tipoAnimal" class="form-label">Tipo de Animal</label>
                    <input type="text" minlength="3" maxlength="10" class="form-control" name="tipoAnimal" id="tipoAnimal" required="required">
                </div>

                <div class="mb-3">
                    <label for="raza">Raza</label>
                    <select name="raza" class="form-control">
                        <option value=""></option>
                        <?php foreach ($razas as $raza): ?>
                            <option value="<?= $raza->raza ?>">
                                <?= $raza->raza ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="dieta">Dieta</label>
                    <select name="dieta" class="form-control">
                            <option value=""></option>
                        <?php foreach ($dietas as $dieta): ?>
                            <option value="<?= $dieta->dieta ?>">
                                <?= $dieta->dieta ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" class="form-control">
                        <option value=""></option>
                        <option value="Adoptado">Adoptado</option>
                        <option value="Sin Dueño">Sin Dueño</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="adoptador">Adoptador</label>
                    <select name="adoptador" class="form-control">
                        <option value=""></option>
                        <?php foreach ($adoptador as $adop): ?>
                            <option value="<?= $adop->nombre ?>">
                                <?= $adop->nombre ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="cuidadosEspeciales">Cuidados Especiales</label>
                    <select name="cuidadosEspeciales" class="form-control">
                        <option value=""></option>
                        <?php foreach ($dietas as $dieta): ?>
                            <option value="<?= $dieta->cuidadosEspeciales ?>">
                                <?= $dieta->cuidadosEspeciales ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>