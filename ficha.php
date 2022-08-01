
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Paciente</title>
    <link rel="stylesheet" href="style3.css">   
</head>
<?php

    include('config.php');

    $pesquisa = $conexao->real_escape_string($_GET['busca']);
    $sql_code = "SELECT * FROM pacientes WHERE nome LIKE '%$pesquisa%' or cpf LIKE '%$pesquisa%'";
    $sql_query = $conexao->query($sql_code) or die("Erro ao consultar" . $conexao->error); 
    
    

?>
<body>
    <form method="GET" action="ficha.php">
        <div class="buscar">
            <input class="cpf_busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca'];?>" type="text" name="busca" size="50" placeholder="Insira o cpf para pesquisar">
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
        </div>
        <fieldset class="box">
            <legend><b>Ficha Paciente</b></legend>
            <div class="header">
                <div class="foto">
                    <img src="foto.jpeg" alt="foto paciente">
                </div>
                <div class="name">
                    <h2><?php echo $dados['nome']?></h2>
                </div>
            </div>
            <div class="dados">
                    <p>CPF: <?php echo $dados['cpf']?></p>
                    <p>Email: <?php echo $dados['email']?></p>
                </div>
            <br>
            <br>
            <div class="dados">
                <p>Telefone: <?php echo $dados['telefone']?></p>
                <p>Sexo: <?php echo $dados['sexo']?></p>
                <p>Peso: <?php echo $dados['peso']?></p>
            </div>
            <br>
            <br>
            <div class="dados">
                <p>Oxigenação:<?php echo $dados['oxigenacao']?></p>
                <p>Saturação::<?php echo $dados['saturacao']?></p>
                <p>Temperatura: <?php echo $dados['temperatura']?></p>
            </div>
            <br>
            <br>
           
        </fieldset>
    </form>
    <?php
                }
            }  

            ?>
</body>

</html>