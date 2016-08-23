<?php
require_once "conexao.php";

if(isset($_POST["acao"])){
//inserir
	if($_POST["acao"] == "inserir"){
	$nome  = null;
	extract($_POST);
	$query = "INSERT INTO teste (nome) VALUES ('$nome');";
	mysqli_query($con, $query);
	$erro = mysqli_error($con);
	if(!empty($erro)){
		echo "erro";
		//break;
	}else{

header("location:index.php");
		}
	}
}
?>