
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
                    <img src="foto.png" alt="foto paciente">
                </div>
                <div class="name">
                    <h2><?php echo $dados['nome']?></h2>
                </div>
            </div>
            <div class="dados">
                    <p>CPF: <span class="db-text"><?php echo $dados['cpf']?></span></p>
                    <p>Email: <span class="db-text"><?php echo $dados['email']?></span></p>
                </div>
            <br>
            <br>
            <div class="dados">
                <p>Telefone: <span class="db-text"><?php echo $dados['telefone']?></span></p>
                <p>Sexo: <span class="db-text"><?php echo $dados['sexo']?></span></p>
                <p>Peso: <span class="db-text"><?php echo $dados['peso']?></span></p>
            </div>
            <br>
            <br>
            <div class="dados">
                <p>Oxigenação: <span class="db-text"><?php echo $dados['oxigenacao']?></span></p>
                <p>Saturação: <span class="db-text"><?php echo $dados['saturacao']?></span></p>
                <p>Temperatura: <span class="db-text"><?php echo $dados['temperatura']?></span></p>
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