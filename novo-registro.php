<h1>Novo registro</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label>Recado</label>
        <input type="text" name="recado" class="form-control">
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>