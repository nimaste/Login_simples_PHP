<?php session_start();
    $nome =htmlspecialchars($_POST['nomeexi']);
    $senha = htmlspecialchars($_POST['senhaexi']);
    if(isset($_SESSION)){
    if($nome == "adm12" && $senha == "a1d2m"){
        ?>
         <!DOCTYPE html>
                <html lang="pt-br">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="">
                    <title>Contas Logada</title>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            </head>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                <body>
                    <center>
                    <div  class="container mt-3">
                    <table class="table table-dark table-hover">
                        <tr>
                            <td> Nome: </td>
                            <td> Senha: </td>
                        </tr>
                        <?php
                        foreach($_SESSION["usuarios"] as $usuarios){
                        echo "<tr>
                            <td> ".$usuarios["nome"]." </td>
                            <td>". $usuarios["senha"]."</td>
                            </tr>";
                        }
                        ?>
                        <form action="index2.php">
                         <button type="submit" class="btn btn-primary">Voltar</button>
                    </form>
                    </table>
                    </div>
                    </center>
                </body>
                </html>
        <?php exit;
    }
    else{
    foreach($_SESSION["usuarios"] as $usuarios){
        if ($usuarios["nome"] == $nome && $usuarios["senha"] == $senha){
            ?>
            <!DOCTYPE html>
                <html lang="pt-br">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="">
                    <title>Conta acessada</title>
                </head>
                <body>
                    <?php
                    echo "<center><p> Seja bem vindo seu ".$nome." </p></center>";
                    ?>
                </body>
                </html>
            <?php
            exit;
        }
    }
}
}
    header('Location: index2.php?Usuario_nao_encontrado');
    exit;

?>