<h1>Listar registro</h1>
<?php
    $sql = "SELECT * FROM registros";

    $res = $conexao->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<td>#</td>";
            print "<td>Nome</td>";
            print "<td>Recado</td>";
            print "<td>Data de Cadastro</td>";
            print "<td>Ações</td>";
            print "</tr>";
    
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->recado."</td>";
            print "<td>".date("d/m/Y H:i:s", strtotime($row->dCriacao))."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\"  class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Deseja remover esse registro?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" 
                    class='btn btn-danger'>Excluir</button>
                    
                    



                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print"<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
