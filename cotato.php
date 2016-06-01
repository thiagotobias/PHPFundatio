<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 01/06/16
 * Time: 07:25
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
            <li><a href="#">Contato</a></li>
        </ul>
    </div>
</nav>

<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox"> Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

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