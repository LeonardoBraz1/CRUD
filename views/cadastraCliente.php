<div class="text-bg-light p-3">
<h1 class="text-uppercase d-flex justify-content-center" >Cadastra cliente</h1>
<form class="row g-3" action="?page=salvar"  method="POST">
    <input type="hidden" name="acao" value="cadastrar">
        <div class="col-md-6" >
          <label for="nome">Nome</label>
          <input class="form-control"
            required
            autocomplete="name"
            id="nome"
            name="nome"
            type="text" 
            placeholder="Digite o nome..."
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
          />
        </div>

        <div class="col-md-6">
          <label for="data_nasc">Data de nascimento</label>
          <input class="form-control"
            required
            id="data_nasc"
            name="data_nasc"
            type="date"
          />
        </div>

        <div class="col-md-6" >
            <input class="form-check-input" type="radio" id="sexo-m" name="sexo" value="Masculino" required>
	          <label class="form-check-label" for="sexo-m">Masculino</label><br>
	          <input class="form-check-input" type="radio" id="sexo-f" name="sexo" value="Feminino" required>
	          <label class="form-check-label" for="sexo-f" >Feminio</label>
          
        </div>
       
        <button class="btn btn-dark fs-6  col-md-6 offset-md-3 "  type="submit" name="submit" >CADASTRA NOVO CLIENTE</button>
      </form>
      
      </div>