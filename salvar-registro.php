<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $recado = $_POST["recado"];

            $sql = "INSERT INTO registros (nome, recado) values('{$nome}', '{$recado}')";
            $res = $conexao->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possivel cadastrar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $recado = $_POST["recado"];

            $sql = "UPDATE registros SET
                        nome='{$nome}',
                        recado='{$recado}'
                    WHERE
                        id=".$_REQUEST["id"];
             
            $res = $conexao->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possivel editar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM registros WHERE id=".$_REQUEST["id"];
            $res = $conexao->query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possivel excluir!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

    }

?>