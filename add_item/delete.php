<?php

$con = mysqli_connect('localhost','root','','bd_onpoint') or die ("erro de conexao"); //cria a conexao
$item = mysqli_real_escape_string($con, $_POST['del']);

$query = "DELETE FROM item WHERE id='$item' ";
$query_run = mysqli_query($con, $query);

if($query_run)
{
    echo "<script type='text/javascript'>alert('item excluido!');"; //alert em JS de erro
    echo "javascript:window.location='./index.php';</script>";
}
else
{
    echo "<script type='text/javascript'>alert('item nao excluido!');"; //alert em JS de erro
    echo "javascript:window.location='./index.php';</script>";
}
?>