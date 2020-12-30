<?php
include 'conexao.php';
$E-mail = $_REQUEST['E-mail'];
$Nome = $_REQUEST['Nome'];
$SobreNome = $_REQUEST['SobreNome'];
if($E-mail != NULL && $Nome != NULL && $SobreNome != NULL){
$query = "insert into chamados(E-mail,Nome,SobreNome)values('$E-mail','$Nome','$SobreNome')";
mysql_query($query) or die(mysql_error());
$query2 = "insert into historico_chamados(E-mail,Nome,Sobrenome)values('$E-mail','$Nome','$Sobrenome')";
mysql_query($query2) or die(mysql_error());


header('location:index.php');
alert("Cadastro efetuado com sucesso");
}else{
    echo 'nao deixe nenhum campo vazio';
}