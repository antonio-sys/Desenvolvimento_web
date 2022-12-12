<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
 $nome = $_POST ["nome"];
 $email = $_POST ["email"];
 $senha = $_POST ["senha"];
 $data_nasc = $_POST ["data_nasc"];
$sql = "INSERT INTO  cadastro (nome, email, senha, data_nasc) VALUES
 ('{$nome}', '{$email}' , '{$senha}' , '{$data_nasc}' )";
   
 $res = $conn ->query($sql);

 if ($res == true){
print "<script> alert('Cadastrado Com sucesso');</script>";
print "<script> location.href='?page=listar';</script>";

 }else {
  print "<script> alert('Nao Foi Possivel Cadastrar');</script>";
  print "<script> location.href= '?page=listar';</script>";

 };  
     break;

   
    case 'editar':
      $nome = $_POST ["nome"];
      $email = $_POST ["email"];
      $senha = $_POST ["senha"];
      $data_nasc = $_POST ["data_nasc"];

      $sql = "UPDATE cadastro SET 
      nome = '{$nome}',
      email = '{$email}',
      senha = '{$senha}',
      data_nasc = '{$data_nasc}' 
      WHERE
      id=".$_REQUEST["id"];
  
      $res = $conn ->query($sql);

 if ($res == true){
print "<script> alert('Editado Com sucesso');</script>";
print "<script> location.href='?page=listar';</script>";

 }else {
  print "<script> alert('Nao Foi Possivel Editar');</script>";
  print "<script> location.href= '?page=listar';</script>";

 } 
      break;
                
    case 'excluir':
      $sql = "DELETE FROM cadastro WHERE id=".$_REQUEST["id"];

      $res = $conn ->query($sql);

 if ($res == true){
print "<script> alert('Excluido Com sucesso');</script>";
print "<script> location.href='?page=listar';</script>";

 }else {
  print "<script> alert('Nao Foi Possivel Excluir');</script>";
  print "<script> location.href= '?page=listar';</script>";

 };  
     break;
  
     
          
       
}
?>