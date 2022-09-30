<div class="text-bg-light p-3">
<h1 class="text-uppercase d-flex justify-content-center" >Editar cliente</h1>
<?php
    $sql = "SELECT * FROM clientes WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();

?>

<form class="row g-3" action="?page=salvar"  method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <div class="col-md-6" >
          <label for="nome">Nome</label>
          <input class="form-control"
            required
            autocomplete="name"
            id="nome"
            name="nome"
            type="text" 
            placeholder="Digite o nome..."
            value="<?php print $row->nome; ?>"
          />
        </div>

        <div class="col-md-6" >
          <label for="cpf">CPF</label>
          <input class="form-control"
            required
            id="cpf"
            name="cpf"
            type="text"
            placeholder="xxx.xxx.xxx-xx"
            value="<?php print $row->cpf; ?>"
          />
        </div>

        <div class="col-md-6" >
          <label for="telefone">Telefone</label>
          <input class="form-control"
            required
            autocomplete="telefone"
            id="telefone"
            name="telefone"
            type="tel"
            placeholder="(11) 9999-9999"
            value="<?php print $row->telefone; ?>"
          />
        </div>

        <div class="col-md-6">
          <label for="data_nasc">Data de nascimento</label>
          <input class="form-control"
            required
            id="data_nasc"
            name="data_nasc"
            type="date"
            value="<?php print $row->data_nasc; ?>"
          />
        </div>

        <div class="col-md-6" >
            <input  class="form-check-input" type="radio" id="sexo-m" name="sexo" value="Masculino"  required>
	          <label class="form-check-label" for="sexo-m">Masculino</label><br>
	          <input class="form-check-input" type="radio" id="sexo-f" name="sexo" value="Feminino"  required>
	          <label class="form-check-label" for="sexo-f" >Feminio</label>
          
        </div>
       
        <button class="btn btn-dark fs-6  col-md-6 offset-md-3 "  type="submit" name="submit" >CADASTRA NOVO CLIENTE</button>
      </form>
      
      </div>