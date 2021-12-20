<?php 
session_start();
include_once './conexao.php'?>
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

        <?php include 'headerDeslog.html' ?>

        <div class="container" style="margin: auto; width: 60%;">
            <div class="row">
                <?php
                    // RECEBE OS DADOS DO FORMULARIO
                    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


                    if(!empty($dados['sendLogin'])){
                        var_dump($dados);
                        $query_login = "SELECT idEmpresa, Email, Senha 
                                        FROM Empresa 
                                        WHERE Email = :Email 
                                        LIMIT 1";
                        $result_login = $conn->prepare($query_login);
                        $result_login->bindParam(':Email', $dados['Email'], PDO::PARAM_STR);
                        $result_login->execute();
                        

                        $row_usuario = $result_login->fetch(PDO::FETCH_ASSOC);
                            var_dump($row_usuario);


                        /*if(($result_login) AND ($result_login->rowCount() != 0)){
                            $row_usuario = $result_login->fetch(PDO::FETCH_ASSOC);
                            var_dump($row_usuario);
                        }else{
                            $_SESSION['msg'] = "Erro: Usuário ou senha inválida!";
                        }*/

                        
                    }

                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>

                <form method="post" action="#" class="col s12 m6" style="margin-left: 50%; margin-right:50%; transform: translate(-50%, 0%);">
                    <h2 style="text-align: center;">Login</h2>
                    <div class="row center-align">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="email" id="email" class="validate">
                                    <label for="email">Email</label>
                                    <span class="helper-text left-align" data-error="Email inválido" data-success="">Digite o email cadastrado</span>
                                </div>
                                <div class="input-field col s12">
                                    <input type="password" id="password" class="validate">
                                    <label for="password">Senha</label>
                                </div>
                                <a href="esqueciSenha.php">Esqueci minha senha</a><br>
                                <a href="cadEmpresa.php">Cadastrar</a>
                            </div>
                            <input type="submit" name="sendLogin" class="waves-effect waves-light btn" value="Entrar">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="main.js"></script>
    </body>
  </html>