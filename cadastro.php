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
    <form action="cadastrar.php" method="POST">
        <div id="card" class="p-3 mb-2 bg-success text-white">
            <?php
            if(isset($_SESSION['status_cadastro'])) :
            ?>
                <div class="alert alert-success" role="alert">
                    Cadastro efetuado com sucesso!
                </div>
            <?php
            endif;
            unset($_SESSION['status_cadastro']);
            ?>
            <?php
            if(isset($_SESSION['usuario_existe'])) :
            ?>
                <div class="alert alert-danger" role="alert">
                    O usuário escolhido já existe! 
                </div>
            <?php
            endif;
            unset($_SESSION['usuario_existe']);
            ?>
            <h3><img src="./img/shield.png" class="icone"/> Cadastro de usuário</h3>
            
            <div class="form-itens">
                <div>
                    <label>Nome:</label>
                    <input name="nome" type="text" placeholder="Nome">
                </div>
            </div>
            <div>
                <div>
                    <label>Usuário:</label>
                    <input name="usuario" type="text" placeholder="Usuário">
                </div>
            </div>
            <div>
                <div>
                    <label>Senha:</label>
                    <input name="senha" type="password" placeholder="Senha">
                </div>
            </div>
            <div>
                <a href="./index.php" class="btn btn-secondary" role="button" aria-pressed="true">Voltar</a>
                <button type="submit" class="btn btn-secondary">Cadastro</button>
            </div>
            
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>