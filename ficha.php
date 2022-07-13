<?php

    include('config.php');

    $pesquisa = $conexao->real_escape_string($_GET['busca']);
    $sql_code = "SELECT * FROM pacientes WHERE nome LIKE '%$pesquisa%' or cpf LIKE '%$pesquisa%'";
    $sql_query = $conexao->query($sql_code) or die("Erro ao consultar" . $conexao->error); 
    
    

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Paciente</title>
    <link rel="stylesheet" href="style2.css">   
</head>

<body>
    <form method="GET" action="ficha.php">
        <div class="buscar">
            <input class="cpf_busca" type="text" name="busca" size="50" placeholder="Insira o cpf para pesquisar">
            <button class="busca">Buscar</button>
            <?php
            //if(!isset($_GET['busca'])){
            //}
            if($sql_query->num_rows==0){
            ?>
                <p>Nenhum resultado encontrado, digite um valor valido</p>  
            <?php
            } else{
                while($dados = $sql_query->fetch_assoc()){
                    ?>
                        <div class="teste_pesquisa">
                            <p class="teste"><?php echo $dados['cpf']?></p>
                            <p class="teste"><?php echo $dados['nome']?></p>
                        </div>

                    <?php
                }
            }  

            ?>
        </div>
        <fieldset class="box">
            <legend><b>Ficha Paciente</b></legend>
            <div class="header">
                <div class="foto">
                    <img src="foto.jpeg" alt="foto paciente">
                </div>
                <div class="name">
                    <h2>Gabriel de Oliveira Marchese</h2>
                    <p>CPF:529.562.168.56</p>
                </div>
            </div>
            <div class="dados">

            </div>
        </fieldset>
    </form>
</body>

</html>