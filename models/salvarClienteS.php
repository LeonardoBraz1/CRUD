<?php

switch($_REQUEST["acao"]){
   case "cadastrar";
     $nome = $_POST["nome"];
     $cpf = $_POST["cpf"];
     $telefone = $_POST["telefone"];
     $data_nasc = $_POST["data_nasc"];
     $sexo = $_POST["sexo"];

     $sql = "INSERT INTO clientes (nome, cpf, telefone, data_nasc, sexo) 
     VALUES ( '{$nome}', '{$cpf}', '{$telefone}', '{$data_nasc}', '{$sexo}' )";

     $res = $conn->query($sql);

     if($res==true){
      print "<script>alert('Cliente cadastrado com sucesso');</script>";
      print "<script>location.href='?page=lista';</script>";
     } else {
      print "<script>alert('Não foi possivel cadastra');</script>";
      print "<script>location.href='?page=lista';</script>";
     }
    break;
   case "editar";
      $nome = $_POST["nome"];
      $cpf = $_POST["cpf"];
      $telefone = $_POST["telefone"];
      $data_nasc = $_POST["data_nasc"];
      $sexo = $_POST["sexo"];

      $sql = "UPDATE clientes SET
                 nome='{$nome}',
                 cpf='{$cpf}',
                 telefone='{$telefone}',
                 data_nasc='{$data_nasc}',
                 sexo='{$sexo}'
              WHERE
                  id=".$_REQUEST["id"];

      $res = $conn->query($sql);

     if($res==true){
       print "<script>alert('Cliente editado com sucesso');</script>";
       print "<script>location.href='?page=lista';</script>";
     } else {
        print "<script>alert('Não foi possivel editar');</script>";
        print "<script>location.href='?page=lista';</script>";
     }
    break;
    case "excluir";
    
    $sql = "DELETE FROM clientes WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);

     if($res==true){
       print "<script>alert('Cliente excluido com sucesso');</script>";
       print "<script>location.href='?page=lista';</script>";
     } else {
        print "<script>alert('Não foi possivel excluir');</script>";
        print "<script>location.href='?page=lista';</script>";
     }

    break;
}


?>