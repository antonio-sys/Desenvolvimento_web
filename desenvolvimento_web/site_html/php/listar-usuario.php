<h1>Listar Usuarios</h1> 
<?php
$sql = "SELECT * FROM cadastro";

$res = $conn ->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0 ){
    print "<table class='table table-hover table-striped table-bordered'>";
    print"<tr>";
    print "<th>#</th>";
    print "<th>Nome Comunidade</th>";
    print "<th>E-mail</th>";
    print"<th>Data Evento</th>";
    print"<th>Ações</th>";
    print"</tr>";
while($row = $res->fetch_object()){
    print"<tr>";
print "<td>".$row->id."</td>";
print "<td>".$row->nome."</td>";
print "<td>".$row->email."</td>";
print"<td>". $row->data_nasc."</td>";
print "<td>
<button onclick =\"location.href='?page=editar&id=".$row->id." ';\" class= 'btn btn-success'>Editar</button>

<button onclick =\"if(confirm('Tem Certeza que Deseja Excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id." ';}else{false;}\"  class='btn btn-danger'>Excluir</button>

</td>";
print"</tr>";
  }

}else
{ print "<p class='alert alert-danger'>Não
    Encontrou Resultado!</p>";
   }
 

 
?>