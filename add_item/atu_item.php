<?php

session_start();
$con = mysqli_connect('localhost','root','','bd_onpoint') or die ("erro de conexao"); //cria a conexao
$id_item = $_SESSION['item'];

$nome = mysqli_real_escape_string($con, $_POST['nome']);
$desc = mysqli_real_escape_string($con, $_POST['descricao']);

$query = "UPDATE item SET nome = '$nome',descricao = '$desc' WHERE id = '$id_item';";
$query_run = mysqli_query($con, $query);

if($query_run)
{
    echo "<script type='text/javascript'>alert('item atualizado!');"; //alert em JS de erro
    echo "javascript:window.location='./index.php';</script>";
}
else
{
    echo "<script type='text/javascript'>alert('item nao atualizado!');"; //alert em JS de erro
    echo "javascript:window.location='./index.php';</script>";
}
?>