<?php
/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 30/05/16
 * Time: 13:22
 */

?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <title>PHP Fundation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./web-files/bootstrap/css/bootstrap.min.css">
  <script src="./web-files/jquery/jquery-1.12.4.min.js"></script>
  <script src="./web-files/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">PHP Fundation</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Empresa</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="#">Serviços</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </div>
  </nav>

<div class="container">
  <div class="jumbotron">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
  <hr>
  <footer>
    <div class="row">
      <div class="col-lg-12">
        <p>Todos os direitos reservados&copy; <?=date("d/m/Y")?></p>
      </div>
    </div>
  </footer>
</body>
</html>

