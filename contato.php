<!DOCTYPE html>
<html lang="pt-BR">
<?php
    require_once("head.php");

    var_dump($_POST);
var_dump($_GET);
?>
<body>
<?php
    $menu_id = "contato";
    require_once("menu.php");
?>
<div class="container">
    <form role="form" name="frm_contato" method="POST" action="<?=$PHP_SELF?>">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="assunto">Assunto:</label>
            <input type="assunto" class="form-control" id="assunto">
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea class="form-control" rows="3" id="mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
<?php
require_once("rodape.php");
?>
</body>
</html>

