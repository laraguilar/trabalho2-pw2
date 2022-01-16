<?php 
// verifica se o usuario esta logado
$_SESSION['logado'] = $_SESSION['logado'] ?? NULL;
if (!$_SESSION['logado']) die(header('Location: index.php'));

// sessao
require_once 'php_actions/sessaoLog.php';

//header
include_once 'includes/headerLog.php'; ?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Estacioney</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">   
        <link rel="shortcut icon" type="imagex/png" href="imagem/logo_estacioney50px.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <div class="container" style="margin: auto; width: 60%;">
            <div class="row">
                <div class="col center-align">
                <div class="row s12 m6 center-align">
                        <div class="col s12 z-depth-1">
                            <h3 class="center">Dados da Empresa</h3>
                            <div class="row center">
                                <div class="col s12 left-align">
                                    <!-- A partir de agora todas as cols são uma linha do "histórico"-->
                                    <div class="row">
                                        <div class="divider"></div>
                                        <div class="col s12"> <!-- LINHA -->
                                            <div class="row"> <!-- Cria duas colunas para os dados e os botoes ficarem na mesma linha e em sentidos opostos -->
                                                <div class="section">
                                                    <div class="col s4">
                                                        <p style="font-weight: bold;">Nome da Empresa</p>
                                                    </div>
                                                    <div class="col s8 pull-s1 ">
                                                        <p><?php echo $dados['nomEmpresa'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12"> <!-- LINHA -->
                                            <div class="divider"></div>
                                            <div class="row">
                                                <div class="section">
                                                <div class="col s4">
                                                        <p style="font-weight: bold;">E-mail</p>
                                                    </div>
                                                    <div class="col s8 pull-s1 ">
                                                        <p><?php echo $dados['Email'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12"> <!-- LINHA -->
                                            <div class="divider"></div>
                                            <div class="row">
                                                <div class="section">
                                                <div class="col s4">
                                                        <p style="font-weight: bold;">CPF/CNPJ</p>
                                                    </div>
                                                    <div class="col s8 pull-s1 ">
                                                        <p><?php echo $dados['dscCpfCnpj'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12"> <!-- LINHA -->
                                            <div class="divider"></div>
                                            <div class="row">
                                                <div class="section">
                                                <div class="col s4">
                                                    <p style="font-weight: bold;">Telefone</p>
                                                    </div>
                                                    <div class="col s8 pull-s1 ">
                                                        <p><?php echo $dados['Telefone'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col s12"> <!-- LINHA -->
                                            <div class="divider"></div>
                                            <div class="row">
                                                <div class="section">
                                                    <div class="col s6">
                                                        <a href="alterarSenha.php" class="waves-effect waves-light btn">Alterar Senha</a>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="main.js"></script>
    </body>
  </html>