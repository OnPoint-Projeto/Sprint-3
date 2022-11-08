<?php
session_start();
// puxa o id do uduario (que é o mesmo do querda roupa sem exceção pelo trigger no bd)
$id_usuario = $_SESSION['id'];
// abre a conexao
$con = mysqli_connect("localhost","root","","bd_onpoint") or die ("erro de conechao");
// puxa o nome e o blob(blob é uma imagem em formato de string) do item
$query = "SELECT * FROM item WHERE id_guarda = '$id_usuario';";
$query_run = mysqli_query($con,$query);
// se der certo, ele atribui a um arry
if(mysqli_num_rows($query_run) > 0){
    $item = mysqli_fetch_array($query_run);
}
?>

<!DOCTYPE html>
<body>
    <form enctype="multipart/form-data" action="add_item.php" method="post">
        nome do item: <input type="text" name="nome"><br>
        descricao: <input type="text" name="descricao"><br>
        <input name="foto" type="file" /><br><br>
        <input type="submit" value="confirmar">
    </form>
</body>
<?php
    // imprime os itens para adicionar a um look
    foreach($query_run as $item){
        ?>
            <tr>
                <td>
                    <a href="">
                        <div>
                            <?= $item['nome'];?><br>
                            <!-- a linha abaixo é o metodo utilizado para imprimir o blob em forma de imagem -->
                            <img src = "data:image/png;base64,<?= $item['arquivo'] ?>" width = "50px" height = "50px"/>
                            <form action="delete.php" method="POST">
                            <button type="submit" name="del" value="<?=$item['id'];?>">Deletar</button>
                            </form>
                            <form action="atualizar.php" method="POST">
                            <button type="submit" name="atu" value="<?=$item['id'];?>">Atualizar</button>
                            </form>
                        </div>
                    </a>
                </td>
            </tr>
        <?php  
    }
?>
<form action="../Tela-Perfil/index.php">
    <button>home</button> 
</form>
</body>