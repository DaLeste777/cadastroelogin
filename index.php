<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cadastro e login</title>
    <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <form action="login.php" method="POST">
        <div id="card" class="p-3 mb-2 bg-success text-white">
            <?php
            if (isset($_SESSION['nao_autenticado'])) :
            ?>
                <div class="alert alert-warning" role="alert">
                    Erro: Usuário ou senha incorreto!
                </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);

            ?>
            <h3><img src="./img/shield.png" class="icone"/> Sistema de Teste</h3>
            
            <label>Login</label>
            <input name="usuario" type="text" class="login-nome" />
            <label>Senha</label>
            <input name="senha" type="password" class="input-senha" /> <br>
            <div class="botoes">
                <button type="submit" class="btn btn-secondary">Entrar</button>
                <a href="./cadastro.php" class="btn btn-secondary" role="button" aria-pressed="true">Cadastrar</a>
            </div>
                
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>