<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="author" content=""> 
  <title>Prueba Isabel Jiménez</title>
  <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

            <?php foreach($menu as $item): ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo $item['url'] ?>"> <?php echo $item['title'] ?> </a></li>
            <?php endforeach; ?>
        </ul>
      </div>
    </div>
</nav>

<img src="<?php echo base_url('assets/img/creditos.jpg')?>" class="img-thumbnail mx-auto d-block" alt="Cinque Terre" width=80%>
</body>
</html>