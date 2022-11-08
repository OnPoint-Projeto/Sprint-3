<?php

session_start();
$con = mysqli_connect('localhost','root','','bd_onpoint') or die ("erro de conexao"); //cria a conexao
$_SESSION['item'] = mysqli_real_escape_string($con, $_POST['atu']);

?>
<form action="atu_item.php" method="post">
    nome do item: <input type="text" name="nome"><br>
    descricao: <input type="text" name="descricao"><br>
    <input type="submit" value="confirmar">
</form>
<form action="../Tela-Perfil/index.html">
    <button>home</button> 
</form>