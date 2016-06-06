<!DOCTYPE html>
<html lang="pt-BR">
<?php
    require_once("head.php");

    if($_POST['btn_enviar'] === 'btn_enviar'){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
        if(empty($nome) AND empty($email) AND empty($assunto) AND empty($mensagem)){
            $msg_erro = "Os campos estão fazios, favor preencher";
            unset($nome);
            unset($email);
            unset($assunto);
            unset($mensagem);
        }
    }
?>
<body>
<?php
    $menu_id = "contato";
    require_once("menu.php");
?>
<div class="container">
    <?php
    if($_POST['btn_enviar'] === 'btn_enviar' AND empty($msg_erro)){?>

        <div class="alert alert-success" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            Dados enviados com sucesso, abaixo seguem os dados que você enviou
        </div>
    <?php
    }
    if(!empty($msg_erro)){?>
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <?=$msg_erro?>
        </div>
    <?php
    }
    ?>
    <form role="form" name="frm_contato" method="POST" action="contato.php">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?=$nome?>">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?=$email?>">
        </div>
        <div class="form-group">
            <label for="assunto">Assunto:</label>
            <input type="assunto" class="form-control" id="assunto" name="assunto" value="<?=$assunto?>">
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea class="form-control" rows="3" id="mensagem" name="mensagem"><?=$mensagem?></textarea>
        </div>
        <button type="submit" class="btn btn-default" name="btn_enviar" value="btn_enviar" >Enviar</button>
    </form>
</div>
<?php
    require_once("rodape.php");
?>
</body>
</html>

