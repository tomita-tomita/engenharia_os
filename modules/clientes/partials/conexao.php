<?php 

$con = mysqli_connect("localhost", "root", "", "teste"); //endereço do servidor, usuário, senha, nome do banco de dados
if(mysqli_connect_error() !== NULL){
	echo "ERRO BANCO DE DADOS";
	exit;
}
?>