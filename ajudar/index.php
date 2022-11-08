<?php

    session_start();
    // puxa o id do uduario (que é o mesmo do guarda roupa sem exceção pelo trigger no bd)
    $id_usuario = $_SESSION['id'];
    // abre a conexao
    $con = mysqli_connect("localhost","root","","bd_onpoint") or die ("erro de conechao");
    // pucha todos os pedidos de ajuda
    $query_select = 
    "SELECT ajudar.evento,usuario.nome,ajudar.id,ajudar.dt
    FROM ajudar JOIN usuario
    ON usuario.id = ajudar.id_usuarioe
    WHERE ajudar.id_usuarior = '$id_usuario';";
    $query_run = mysqli_query($con,$query_select);
    if(mysqli_num_rows($query_run) > 0){
        $pedidos = mysqli_fetch_array($query_run);
        foreach($query_run as $pedidos){
            ?>
            <tr>
                <td>
                    pedido de: <?=$pedidos['nome'];?><br>
                    evento: <?=$pedidos['evento'];?><br>
                    data de pedido: <?=$pedidos['dt'];?>
                    <form action="ajudar.php" method="post">
                        <button type="submit" name="ajudar" value="<?=$pedidos['id']?>">ajudar</button>
                    </form>
                </td>
            </tr>
<?php
        }
    }

    else{
        echo "<script type='text/javascript'>alert('SEM PEDIDOS DE AJUDA');";
        echo "javascript:window.location='../Tela-Perfil/index.html';</script>";
    }
    
?>
<form action="../Tela-Perfil/index.php">
    <button>home</button> 
</form>

