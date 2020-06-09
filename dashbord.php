<?php
session_start();
if (!$_SESSION['online']) {
    header("location: main.html");
    return false;
}
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <title>On</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registro.php">Listar Servidores</a>
            </li>
  
        </ul>
        <ul class="navbar-nav  my-2 my-lg-0">
            <li class="nav-item">
                <h5 class="nav-link" href="logout.php">Olá <?= $_SESSION['Email'] ?></h5>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Sair</a>
            </li>
        </ul>


    </nav>

    <div class="row justify-content-center mt-5" >
        <div class="col-6">
            <img class="card-img-top" src="https://super.abril.com.br/wp-content/uploads/2020/02/si_413_astronauta.jpg" alt="Astro">
            <div class="card-body">
                <p class="card-text">"If you use your mind, you can do anything" - Back to the Future</p>
            </div>
        </div>
    </div>

</body>
</html>