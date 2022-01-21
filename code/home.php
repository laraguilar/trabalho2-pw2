<?php 
// Log na Sessao
require_once 'php_actions/sessaoLog.php';
// header
include_once 'includes/headerLog.php';
?>
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
                    <h4 class="center"><?php echo $nomEstac?></h4>
                    <!-- Dropdown Trigger
                    <a class='dropdown-trigger btn' href='#' data-target='dropdown2'>DROPDOWN??<?php //echo $dadosEstac['nomEstac']?><i class="material-icons right">arrow_drop_down</i> </a>

                    Dropdown Structure -->
                    <?php
                        /*$_SESSION['idEstacSelected'] = NULL;
                        // mostra a lista de estacionamentos da empresa
                        $sql = "SELECT * FROM estacionamento WHERE idEmpresa = $id";
                        $result = mysqli_query($conn, $sql);
                        // cria a tabela
                        echo "<form action='php_actions/teste.php' method='POST'> <ol id='dropdown2' class='dropdown-content'>";
                        // faz um while que mstra a informação de todos os estacionamentos da empresa
                        while($dado = mysqli_fetch_array($result)):
                            $idEstac = $dado['idEstac'];

                            if(!($dadosEstac['idEstac'] == $idEstac)){
                                echo "<button type='submit' id=".$idEstac." name='entrarEstac'>";
                                echo $dado['nomEstac'];
                                echo "</button>";
                            }  
                        endwhile;
                        echo "</ol></form>";*/
                    ?>

                    <div class="row center">
                        <div class="col s12 m6">
                            <h6><b>Valor fixo:</b> R$<?php echo number_format($valFixo, 2);?></h6>
                        </div>
                        <div class="col s12 m6">
                            <?php 
                                //$sql = "SELECT count(*) AS 'vagas ocupadas' FROM vaga WHERE idEstac = '$idEstac' AND condVaga = 1;";
                                //$query = mysqli_query($conn, $sql);
                            ?>
                            <h6><b>Disponibilidade:</b> 27/<?php echo $qtdVagas ?></h6>
                        </div>
                        <div class="col s12 m6">
                            <h6><b>Acréscimo/hora:</b> R$<?php echo number_format($valAcresc, 2);?></h6>
                        </div>
                        <div class="col s12 m6">
                            <a href="entrada.php" class="btn indigo darken-4">entrada veiculo</a>
                        </div>
                        <div class="col s12 left-align">
                            <br>
                            <div class="divider"></div>
                            <div class="row">
                                <?php
                                    // pega dados da vaga
                                    $sql = "SELECT * FROM vaga WHERE idEstac = '$idEstac';";
                                    $query = mysqli_query($conn, $sql);

                                    // percorre as vagas do estacionamento
                                    while($vaga = mysqli_fetch_array($query)):                                  
                                        // verifica se a vaga está ocupada


                                        $idVaga = $vaga['idVaga'];
                                        $condVaga = $vaga['condVaga'];

                                        // pega os dados da vaga alocada
                                        $sql2 = "SELECT * FROM aloca WHERE idVaga = '$idVaga';";
                                        $query2 = mysqli_query($conn, $sql2);

                                        while($aloca = mysqli_fetch_array($query2)):
                                            $idPessoa = $aloca['idPessoa'];

                                            // dados do cliente que alocou a vaga
                                            $query3 = mysqli_query($conn, "SELECT * FROM pessoa WHERE idPessoa = '$idPessoa'");
                                            $pessoa = mysqli_fetch_array($query3);

                                
                                            echo "<div class='col s8'>";
                                            echo "<h5>".$pessoa['nomPessoa']."</h5><span>Hora de Entrada: ".$aloca['hrEntrada']."</span><br><span>Placa: ".$aloca['dscPlaca']."</span>";
                                            echo "</div>";

                                            echo "<div class='col s4'>";
                                                echo "<div class='right-align' style='position: relative;top: 50%;transform: translateY(-50%);'>";
                                                echo "<a class='btn-floating btn-medium indigo darken-4 right-align'><i class='material-icons'>exit_to_app</i></a><a class='btn-floating btn-medium indigo darken-4 right-align'><i class='material-icons'>delete_forever</i></a>";
                                                echo "</div>";
                                            echo "</div>";
                                            echo "<div class='divider'></div>";
                                        endwhile;
                                    endwhile;
                                ?>
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

        <?php 
        include_once 'includes/footer.php';?>

    </body>

  </html>