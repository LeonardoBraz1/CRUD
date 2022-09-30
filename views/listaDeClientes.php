 <h1 class="d-flex justify-content-center text-bg-light p-3">Lista de clientes</h1>
 <?php
 
     $sql = "SELECT * FROM clientes";

     $res = $conn->query($sql);

     $qtd = $res->num_rows;

     if($qtd > 0){
        print "<table class='table bable-hover table-striped table-bordered'>";
             print "<tr>";
             print  "<th>#</th>";
             print  "<th>Nome</th>";
             print  "<th>CPF</th>";
             print  "<th>Telefone</th>";
             print  "<th>Data de nascimento</th>";
             print  "<th>sexo</th>";
             print  "<th>Ações</th>";
             print   "<tr>";
        while($row = $res->fetch_object()){
             print "<tr>";
             print  "<td>".$row->id."</td>";
             print  "<td>".$row->nome."</td>";
             print  "<td>".$row->cpf."</td>";
             print  "<td>".$row->telefone."</td>";
             print  "<td>".$row->data_nasc."</td>";
             print  "<td>".$row->sexo."</td>";
             print  "<td class='d-flex justify-content-center gap-3'>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
             </td>";
             print   "<tr>";
        }
        print "</table>";
     }else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
     }


 ?>