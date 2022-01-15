<?php
require_once 'php_actions/sessaoLog.php';
?>
<div class="navbar">
    <nav>
        <div class="nav-wrapper indigo darken-4">
            <a href="home.php" class="brand-logo" style="margin-left:2%; margin-top: 1%;"><img src="imagem/logo_estacioney50px.png" alt="" width="35" height="35"></a>
            <a href="#" data-target="mobile-navbar" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <ul id="navbar-items" class="right hide-on-med-and-down" style="padding-right: 3%;">
                <li><a href="home.php">Home</a></li>
                <li><a href="historico.php">Histórico</a></li>
                <li><a href="empresa.php">Empresa</a></li>
                <li><a href="estacionamento.php">Estacionamento</a></li>
                <li><?php echo $dados['nomEmpresa']; ?>
            </ul>
        </div>
    </nav>
</div>

<!-- Menu Mobile -->
<ul id="mobile-navbar" class="sidenav">
    <li><a href="home.php">Home</a></li>
    <li><a href="historico.php">Histórico</a></li>
    <li><a href="empresa.php">Empresa</a></li>
    <li><a href="estacionamento.php">Estacionamento</a></li>
</ul>