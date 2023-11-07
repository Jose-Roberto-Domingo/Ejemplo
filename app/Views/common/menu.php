<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="">
      <img src="https://th.bing.com/th/id/R.9a7b7544c5d171a92adfe66f212bc6dd?rik=gUbaDIpkhaKmFQ&riu=http%3a%2f%2fimagenes.4ever.eu%2fdata%2fdownload%2fanimales%2fperritos%2fperro-y-gato-226156.jpg%3fno-logo&ehk=r%2f72E1IOw9eGjzKDhbtQFaaG4eVHtUlzHTwEGscTxaA%3d&risl=&pid=ImgRaw&r=0" alt="Adopciones" width="61" height="43">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('index.php'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Adoptador
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/Adoptador/agregar'); ?>">Agregar Adoptador</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/Adoptador/mostrar'); ?>">Mostrar Adoptador</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/Adoptador/buscar'); ?>">Buscar Adoptador</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Dietas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/Dietas/agregar'); ?>">Agregar Dieta</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/Dietas/mostrar'); ?>">Mostrar Dieta</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/Dietas/buscar'); ?>">Buscar Dieta</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Mascotas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/Mascota/agregar'); ?>">Agregar Mascota</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/Mascota/mostrar'); ?>">Mostrar Mascota</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/Mascota/buscar'); ?>">Buscar Mascota</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Razas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/Raza/agregar'); ?>">Agregar Raza</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/Raza/mostrar'); ?>">Mostrar Raza</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/Raza/buscar'); ?>">Buscar Raza</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>