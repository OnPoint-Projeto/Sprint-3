<?php
    if(!isset($_SESSION)){
        session_start();
    }
    
    include('./assets/seguranca.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnPoint - Perfil</title>
    <link rel="stylesheet" href="./assets/stylePerfil.css">

    <!--BS5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>
<div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light" style="background-color: #8c52ff!important;">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">
            <img src="./img/logopit.jpg" alt="" width="40" height="40" class="d-inline-block align-text-top">
            OnPoint
          </a>
          <ul class="nav justify-content-center">  
            <li class="nav-item">
              <a href="./assets/logout.php" class="btn btn-outline-light" title="LogOut"><i class="bi bi-box-arrow-right"></i></a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Foto e Infos -->
      <div class="container my-4">
          <div class="profile">
            <img src="./img/default.png" alt="foto-perfil" class="profilePic">
            <p style="transform: translate(0,90px); font-size: 22px;"><?php echo $_SESSION['nome']; ?></p>

            <p class="text-muted" style="transform: translate(0,100px); font-size: 18px;">Sua bio aqui</p>

              <button class="btn btn-outline-light" style="margin-left: 80vh; background-color: #8c52ff;">EDITAR PERFIL</button>

            <br style="clear: both;">
          </div>
          <main>
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a href="../add_item/index.php" class="btn btn-outline-light" title="Adicionar Items"><i class="bi bi-door-open-fill"></i></a>
              </li>
              <li class="nav-item">
                <a href="../pedir_ajuda/index.html" class="btn btn-outline-light" title="Pedir Ajuda"><i class="bi bi-chat-left-dots-fill"></i></a>  
              </li>
              <li class="nav-item">
                <a href="../ajudar/index.php" class="btn btn-outline-light" title="Ajudar"><i class="bi bi-chat-right-dots-fill"></i></a>
              </li>
          </ul>
          </main>
      </div>

      <!-- Grid de looks -->
      <di class="container grid-looks text-center">
        <div class="row">
          <div class="col-3">
            <div class="card">
              <div class="card-body">
                <img src="./img/logopit.jpg" alt="" class="card-img-top p-2 rounded-4">
                <h3 class="card-title">Nome-item</h3>
                <p class="card-text text-muted">Descricao do Item da Imagem</p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <div class="card-body">
                <img src="./img/logopit.jpg" alt="" class="card-img-top p-2 rounded-4">
                <h3 class="card-title">Nome-item</h3>
                <p class="card-text text-muted">Descricao do Item da Imagem</p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <div class="card-body">
                <img src="./img/logopit.jpg" alt="" class="card-img-top p-2 rounded-4">
                <h3 class="card-title">Nome-item</h3>
                <p class="card-text text-muted">Descricao do Item da Imagem</p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <div class="card-body">
                <img src="./img/logopit.jpg" alt="" class="card-img-top p-2 rounded-4">
                <h3 class="card-title">Nome-item</h3>
                <p class="card-text text-muted">Descricao do Item da Imagem</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--BS5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>