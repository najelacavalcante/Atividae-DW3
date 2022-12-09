<?php 

     require_once("conexao.php");

     $sql = "select * from animal";

     $resultSql = $conexao-> query($sql);

     $vetorRegistro = $resultSql-> fetch_all(MYSQLI_ASSOC);


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Raça</th>
      <th scope="col">Proprietário</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($vetorRegistro as $registro): ?>
    <tr>
      <th scope="row"> <?=$registro["id"]; ?> </th>
      <td> <?=$registro["nome"]; ?> </td>
      <td> <?=$registro["idade"]; ?> </td>
      <td> <?=$registro["raca"]; ?> </td>
      <td> <?=$registro["proprietario"]; ?> </td>
      <td> <?=$registro["telefone"]; ?> </td>
    </tr>
  </tbody>
<?php endforeach ?>
</table>

</body>
</html>