<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Prueba de selección</title>
    <style>
        
        img{
            position: absolute;
            left: 120px;
            top: 40px;
            z-index: -1;
        }

    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url('/index.php/principal/index')?>" style="color:orange"><h3>M<small>icro préstamos baratos</small></h3></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
</nav>
<img src="<?php echo base_url('assets/img/creditos.jpg')?>" class="img-thumbnail mx-auto d-block" alt="Cinque Terre" width=80%>-->
<br><br><br><br>

<h1 style= "text-align:center"> Nuevo Usuario</h1>
<!--MUESTRA LOS MENSAJES DE ERROR DE VALIDACION-->

<div class="container">
          <div class=" row justify-content-lg-center">
              <div class="col-lg-6">
                  <form action=" <?php echo base_url('/index.php/registro/nuevo')?>" method="POST">
                      <div class="form-group">
                          <label for="name">Nombre:</label>
                          <input type="text" class="form-control" name="nombre" id="name" aria-describedby="emailHelp" placeholder="Introduce tu nombre">
                         <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      <div class="form-group">
                          <label for="surname">Apellido:</label>
                          <input type="text" class="form-control" name="apellido" id="surname" aria-describedby="emailHelp" placeholder="Introduce tu apellido">
                         <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      <div class="form-group">
                          <label for="password">Contraseña:</label>
                          <input type="text" class="form-control" name="contraseña" id="password" aria-describedby="emailHelp" placeholder="Introduce una contraseña">
                         <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                      
        
                      <button type="submit" class="btn btn-primary">Crear Usuario</button>
                  </form>
              </div>
          </div>
</div>

<?php echo isset($mensaje) ? $mensaje : '' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/registro.js')?>"></script>
</body>
</html>



