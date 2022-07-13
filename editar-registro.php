<h1>Editar registro</h1>
<?php
$sql = "SELECT * FROM registros WHERE id=".$_REQUEST["id"];
$res = $conexao->query($sql);
$row = $res->fetch_object();

?>



<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" value="<?php print $row->nome ?>" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label>Recado</label>
        <input type="text" value="<?php print $row->recado ?>" name="recado" class="form-control">
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>