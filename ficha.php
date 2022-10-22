<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Paciente</title>
    <link rel="stylesheet" href="style3.css">
    <script defer src="scripts.js"></script>
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
            if(!isset($_GET['busca'])){
            ?>    <p>digite um valor</p>
            <?php
            }
            if($sql_query->num_rows==0){
            ?>
                <p>Nenhum resultado encontrado, digite um valor valido</p>  
            <?php
            } else{
                while($dados = $sql_query->fetch_assoc()){
                    ?>
        </div>
<div class="fundo">
    <fieldset class="box">
        <legend><b>Ficha Paciente</b></legend>
        <div class="header">
            <h2><?php echo $dados['nome']?></h2>
        </div>
        <br>
        <br>
        <section class="ficha-box">
            <div class="lado-esquerda">
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
                <br>
                <br>
                <br>
                <br>
            </div>
            <div class="lado-direito">
                <div class="dados">
                    <p>Nome Responsavel: <span class="db-text"><?php echo $dados['NomeResp']?></span></p>
                    <p>CPF do Responsavel: <span class="db-text"><?php echo $dados['CPFResp']?></span></p>
                </div>
                <br>
                <br>
                <div class="dados">
                    <p>Idade: <span class="db-text"><?php echo $dados['Idade']?></span></p>
                    <p>Plano de Saúde: <span class="db-text"><?php echo $dados['PlanoSaude']?></span></p>
                    <p>Convénio: <span class="db-text"><?php echo $dados['Convenio']?></span></p>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </section>

        <div class="solo">
            <p>Temperatura: <span class="db-text"><?php echo $dados['temperatura']?></span></p>
        </div>
        

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>            


        <div class="content">
            <button class="show/hidden">Histórico Médico</button>
        </div>
        <section class="history">
            <section class="ficha-box">
                <div class="lado-esquerda">
                    <br>
                    <div class="dados">
                        <p>Médico Responsavel: <span class="db-text"><?php echo $dados['Medico']?></span></p>
                        <p>Data da Consulta: <span class="db-text"><?php echo $dados['DataCons']?></span></p>
                    </div>
                    <br>
                    <div class="dados">
                        <p>Motivo: <span class="db-text"><?php echo $dados['Motivo']?></span></p>
                        <p>Tratamento: <span class="db-text"><?php echo $dados['Tratamento']?></span></p>
                    </div>
                    <br>
                </div>
                <div class="lado-direito">
                    <br>
                    <div class="dados">
                        <p>Tipo: <span class="db-text"><?php echo $dados['Tipo']?></span></p>
                        <p>Internação <span class="db-text"><?php echo $dados['Intenacao']?></span></p>
                    </div>
                    <br>

                    <div class="dados">
                        <p>Tempo de Tratamento: <span class="db-text"><?php echo $dados['TempoTrat']?></span></p>
                        <p>Outros: <span class="db-text"><?php echo $dados['Outros']?></span></p>
                    </div>
                    <br>
                </div>
            </section>
        </section>
    </fieldset>
</div>
    <?php
             }
         }  

    ?>
</body>

</html>