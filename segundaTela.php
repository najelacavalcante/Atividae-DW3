<?php 

     $nome = $_POST["nome"];
     $idade = $_POST["idade"];
     $raca = $_POST["raca"];
     $proprietario = $_POST["proprietario"];
     $telefone = $_POST["telefone"];

     require_once("conexao.php");

     $sql = "insert into animal(nome, idade, raca, proprietario, telefone) values(?,?,?,?,?)";

     $sqlPrep = $conexao-> prepare($sql);

     $sqlPrep-> bind_param("sssss",$nome, $idade, $raca, $proprietario, $telefone);

     $sqlPrep->execute();

     header("location:listar.php");



 ?>