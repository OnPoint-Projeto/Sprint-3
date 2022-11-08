<?php

    session_start();
    // puxa o id do uduario (que é o mesmo do querda roupa sem exceção pelo trigger no bd)
    $id_usuario = $_SESSION['id'];
    // abre a conexao
    $con = mysqli_connect("localhost","root","","bd_onpoint") or die ("erro de conechao");
    // puxa o nome e o blob(blob é uma imagem em formato de string) do item
    $query = "SELECT nome,arquivo FROM item WHERE id_guarda = '$id_usuario';";
    $query_run = mysqli_query($con,$query);
    // se der certo, ele atribui a um arry
    if(mysqli_num_rows($query_run) > 0){
        $item = mysqli_fetch_array($query_run);
    }
?>
<body>
    <form action="add_look.php" method="post">
        nome: <input type="text" name="nome">
        descricao: <input type="textarea" name="descricao">
        <div id="look">

        </div>
        <button>confirmar</button>
    </form>

    <?php
    // imprime os itens para adicionar a um look
    foreach($query_run as $item){
    ?>
        <a href="">
            <div>
                <?= $item['nome'];?><br>
                <!-- a linha abaixo é o metodo utilizado para imprimir o blob em forma de imagem -->
                <img src = "data:image/png;base64,<?= $item['arquivo'] ?>" width = "50px" height = "50px"/> 
            </div>
        </a>
    <?php  
    }
    // quando adicionar as imagens na div favor atribuir o blob de cada imagem tambem
    // ex.: $img1 = "blob img1";
    // $_SESSION['img1'] = $img1;
    // $_SESSION['img2'] = $img2;
    // $_SESSION['img3'] = $img3;
    // $_SESSION['img4'] = $img4;
     ?>
    
    

</body>