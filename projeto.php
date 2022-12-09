<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>

<h1>Bem vindo ao PetShop!</h1>

<form action="segundaTela.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputNome" class="form-label">Nome</label>
    <input type="nome" class="form-control" id="exampleInputNome" aria-describedby="nomeHelp" placeholder="Nome do animal" name="nome">
  </div>
  <div class="mb-3">
    <label for="exampleInputIdade" class="form-label">Idade</label>
    <input type="idade" class="form-control" id="exampleInputIdade" aria-describedby="idadeHelp" placeholder="Idade do animal" name="idade">
  </div>
  <div class="mb-3">
    <label for="exampleInputRaca" class="form-label">Raça</label>
    <input type="raca" class="form-control" id="exampleInputRaca" aria-describedby="racaHelp" placeholder="Raça do animal" name="raca">
  </div>
  <div class="mb-3">
    <label for="exampleInputProprietario" class="form-label">Proprietário</label>
    <input type="proprietario" class="form-control" id="exampleInputProprietario" aria-describedby="proprietarioHelp" placeholder="Nome do proprietário" name="proprietario">
  </div>
  <div class="mb-3">
    <label for="exampleInputTelefone" class="form-label">Telefone</label>
    <input type="telefone" class="form-control" id="exampleInputTelefone" aria-describedby="telefoneHelp" placeholder="Telefone do proprietário" name="telefone">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
	
</div>

</body>
</html>