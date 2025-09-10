<?php

include 'conexao.php';

$nm_usuario = $_post['nome'];
$dt_nascimento = $_post['data'];
$login = $_post['login'];
$senha = $_post['senha'];
$setor = $_post['setor'];

$insert = "INSERT INTO tb_usuario  VALUES (NULL ,'$nm_ususario','$dt_nascimento','$login','$senha','$setor')";

$query = $conexao->query($insert);

if($query == true){
    echo "<script> alert('usuario cadastrado com sucesso'); history.back() <script>";
}else{
    echo "<script> alert ('erro ao cadastrar'); history.back() </script>";
}


?>