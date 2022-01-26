
<?php
include 'config/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Tineda Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">

            <li class="nav-item">
              <a class="nav-link" href="#">Desafio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">BSALE</a>
            </li>
          </ul>
          <form class="d-flex" method="get">
            <input class="form-control me-2" id="formulario" name="busqueda" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" id="boton" type="submit" name="enviar">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

<br><br>
<?php

if(isset($_GET['enviar'])) {
$busqueda = $_GET['busqueda'];
$consulta = $con->query("SELECT * FROM product WHERE id LIKE '%$busqueda%'");

while ($row = $consulta->fetch_array()){
  echo $row['id'].'<br>';

}
}

?>

<div class="container mt-5">
    <ul id="resultado">
    </ul>
</div>
<script src="config/buscador.js"></script>

  
  <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
  <img src="images/1.jpg" class="bd-placeholder-img" style="width: 1500px; height: 500px;" alt="">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Zephyrus Duo 15</h1>
              <p><a class="btn btn-lg btn-primary" href="#">$ 900.000</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
  <img src="images/2.jpg" class="bd-placeholder-img" style="width: 1500px; height: 500px;" alt="">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Asus ROG Strix G15</h1>
              <p><a class="btn btn-lg btn-primary" href="#">$ 1.399.990</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
  <img src="images/3.jpg" class="bd-placeholder-img" style="width: 1500px; height: 500px;" alt="">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Zenbook PRO DUO</h1>
              <p><a class="btn btn-lg btn-primary" href="#">$ 2.750.000</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  <br><br>
  
    <!-- End Of The Carrousel -->
  
    <div class="container marketing">
  
      <div class="row">
        <div class="col-lg-4">    
          <img src="Images/1.jpg" class="bd-placeholder-img rounded-circle" style="width: 290px; height: 250px;" alt="Notebook">
          <h2>Zephyrus Duo 15</h2>
          <p><b>CPU:</b> Intel Core i9 <b> GRÁFICOS:</b> RTX 2080 SUPER <b>RAM:</b> 32 GB mhz <b>PANTALLA:</b> ROG ScreenPad Plus que tiene un tamaño de 14.1 con resolución 4K <b>ALMACENAMIENTO:</b> 256 GB SSD</p>
          <p><a class="btn btn-secondary" href="#">Más Información &raquo;</a></p>

        </div>
        <div class="col-lg-4">
          <img src="images/2.jpg" class="bd-placeholder-img rounded-circle" style="width: 290px; height: 250px;" alt="Notebook">
          <h2>Asus ROG Strix G15</h2>
          <p><b>CPU:</b> AMD Ryzen 9 Serie 5000<b> GRÁFICOS:</b> GeForce RTX 3060 <b>RAM:</b> 16 GB 3200 mhz <b>PANTALLA:</b>  15,6 OLED 4K <b>ALMACENAMIENTO:</b> 512 GB SSD</p>
          <p><a class="btn btn-secondary" href="#">Más Información &raquo;</a></p>
        </div>

        <div class="col-lg-4">
          <img src="images/3.jpg" class="bd-placeholder-img rounded-circle" style="width: 290px; height: 250px;" alt="Notebook">
          <h2>ZENBOOK PRO DUO </h2>
          <p><b>CPU:</b> Intel Core i9 <b> GRÁFICOS:</b> GeForce RTX 2060 <b>RAM:</b> 32 GB <b>PANTALLA:</b> 15,6 OLED 4K táctil ScreenPad Plus 14 <b>ALMACENAMIENTO:</b> 256 GB SSD de 1 TB</p>
          <p><a class="btn btn-secondary" href="#">Más Información &raquo;</a></p>
        </div>
      </div>
  
  
    </div>

<br><br><br>  
  
    <!-- FOOTER -->
    <footer class="container">
      <p>Todos los derechos reservados &copy;  2006–2021 <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>