<!DOCTYPE html>
<html lang="pt">
<?php
    require_once("head.php");
?>
<body>
<?php
    $menu_id = "contato";
    require_once("menu.php");
?>
<div class="container">
    <form role="form">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
<?php
require_once("rodape.php");
?>
</body>
</html>

