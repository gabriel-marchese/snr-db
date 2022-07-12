<?php

if(!isset($_GET['busca'])){
    header("Location: ficha.php");
    exit;
}

$busca = "%".trim($_GET['busca'])."%";

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'snr';

$dbh = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   
$sth = $dbh->prepare('SELECT * FROM pacientes WHERE (cpf LIKE :cpf');
$sth->bindParam(':cpf', $busca, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
print_r($resultados);exit;
  

?>