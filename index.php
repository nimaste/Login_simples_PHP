<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Criar Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
<center>
<div  class="container mt-5">
<form action="criar.php" method="post">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Usuario:</label>
    <input type="text" class="form-control" id="nome" placeholder="Nome de usuario" name="nome" requiered>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Senha:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Senha" name="senha" required>
  </div>

  <button type="submit" class="btn btn-primary">Criar conta</button>
</form>
<br>
<form action="index2.php" method="post">
<button type="submit" class="btn btn-primary">Já tenho uma conta</button>
</form>
</div>
</center>
</body>
</html>
