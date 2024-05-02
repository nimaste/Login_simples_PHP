<?php session_start();
if (!isset($_SESSION["usuarios"])){
    $_SESSION["usuarios"]=[];
}
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $_SESSION["usuarios"][]=[
        "nome" => htmlspecialchars($_POST['nome']),
        "senha" => htmlspecialchars($_POST['senha'])
    ];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Conta Criada</title>
</head>
<body>
    <h1>
        Conta Criada
    </h1>
    <?php 
    if(!empty($_POST['nome'])){
        echo "<p> Seja bem vindo senhor(a) ". $_POST["nome"];
    }
    ?>
    <a href="index.php">voltar</a>
</body>
</html>