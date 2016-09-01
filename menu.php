
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="./">PHP Fundation</a>
        </div>
        <ul class="nav navbar-nav">
            <li <?php echo ($menu_id == "index") ? "class='active'" : "" ; ?> ><a href="./">Home</a></li>
            <li <?php echo ($menu_id == "empresa") ? "class='active'" : "" ; ?> ><a href="./empresa">Empresa</a></li>
            <li <?php echo ($menu_id == "produtos") ? "class='active'" : "" ; ?> ><a href="./produtos">Produtos</a></li>
            <li <?php echo ($menu_id == "servicos") ? "class='active'" : "" ; ?> ><a href="./servicos">Serviços</a></li>
            <li <?php echo ($menu_id == "contato") ? "class='active'" : "" ; ?> ><a href="./contato">Contato</a></li>
        </ul>
    </div>
</nav>