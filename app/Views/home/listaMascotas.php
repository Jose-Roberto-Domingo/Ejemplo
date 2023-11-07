<div class="container">
    <div class="row">
    <center>
        <div class="col-8">
    <h2 style="color: black; font-family: Arial, sans-serif;">Bienvenido a nuestra página de adopción de mascotas</h2>
        <p style="font-size: 18px; color: #34495e; font-family: 'Times New Roman', Times, serif;">
        Esta página web tiene como objetivo ayudar a las mascotas a encontrar un hogar amoroso. Aquí, puedes ver una lista de todas las mascotas que actualmente están disponibles para adopción. Cada tarjeta de mascota proporciona detalles sobre la mascota, incluyendo su nombre, raza, dieta, estado (si ya ha sido adoptada o aún está sin dueño) y cualquier cuidado especial que pueda necesitar.
    </p>
        <p style="font-size: 18px; color: #34495e; font-family: 'Times New Roman', Times, serif;">
        Si ves una mascota que te gustaría adoptar, simplemente haz clic en el botón "Adoptar" en su tarjeta. Si la mascota ya ha sido adoptada, verás una etiqueta que dice "Adoptado" en lugar del botón.
    </p>
        <p style="font-size: 18px; color: #34495e; font-family: 'Times New Roman', Times, serif;">
        A continuación, proporcionamos un resumen de las mascotas, mostrando cuántas han sido adoptadas y cuántas aún están sin dueño, así como un desglose de las dietas seguidas por nuestras mascotas. Esperamos que esta información te sea útil y te ayude a tomar una decisión informada sobre la adopción.
    </p>    
    </div><br>
    <img src="https://th.bing.com/th/id/R.c702d80a248406edb290729488918e77?rik=ayO%2bdm83sudS4A&pid=ImgRaw&r=0" alt="Adopciones" width="500" height="316">
        </center>
    <center><h2 style="color: blue; font-family: Arial, sans-serif;">Mascotas en adopción</h2></center>
    <br>
    <center>
    <div class="col-4">
    <table class="table table-striped table-hover" border="2">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Estado</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $adoptadas = 0;
                    $sinDueno = 0;
                    foreach($mascotas as $mascota) {
                        if($mascota->estado == "Sin Dueño") {
                            $sinDueno++;
                        } else {
                            $adoptadas++;
                        }
                    }
                ?>
                <tr>
                    <td>Adoptadas</td>
                    <td><?= $adoptadas ?></td>
                </tr>
                <tr>
                    <td>Sin Dueño</td>
                    <td><?= $sinDueno ?></td>
                </tr>
            </tbody>
        </table>
        </div>
        </center>
        <center><h2 style="color: red; font-family: Arial, sans-serif;">Tarjetas de las Mascotas</h2></center>
        <?php $count = 0; ?>
        <?php foreach($mascotas as $mascota): ?>
            <?php if($count % 3 == 0 && $count != 0): ?>
                </div>
                <div class="row">
            <?php endif; ?>
            <div class="col-4">
                
                <div class="card" style="width: 18rem;">
                <svg class="bd-placeholder-img card-img-top" width="50%" height="50%" xmlns="Mascota1.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="35%" y="50%" fill="#eceeef" dy=".3em">Foto Animal <?=$mascota->idMascota ?></text></svg>
                    <div class="card-body">
                        <h5 class="card-title"><?=$mascota->tipoAnimal ?></h5>
                        <p class="card-text">
                            <a>Nombre: <?= $mascota->nombre ?></a><br>
                            <a>Raza : <?= $mascota->raza ?></a><br>
                            <a>Dieta : <?=$mascota->dieta?></a><br>
                            <a>Estado : <?=$mascota->estado?></a><br>
                            <a>Cuidados Especiales : <?=$mascota->cuidadosEspeciales?></a><br>
                        </p>
                        <?php if($mascota->estado == "Sin Dueño"): ?>
                        <a href="#" class="btn btn-primary">Adoptar</a>
                        <?php else:?>
                        <label for="estado">Adoptado</label>
                        <?php endif?>
                    </div>
                </div><br>
            </div>
            <?php $count++; ?>
        <?php endforeach ?>
    </div>
</div>
