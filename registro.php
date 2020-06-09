<?php
session_start();
if (!$_SESSION['online']) {
    header("location: main.html");
    return false;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <title>Registrar Funcionario</title>
</head>
<body>
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
                <a class="nav-link" href="dashbord.php">Voltar</a>
            </li>
        </ul>
    </nav>
    
    <div class="container">
    <hr>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Listar</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Email</td>
                            <td>Senha</td>
                            <td>Admin</td>
                        </tr>
                        </thead>

                        <tbody>

                        <?php
                        $con = new PDO("mysql:host=localhost;dbname=projeto", "root","");
                        $query = $con->prepare("SELECT * FROM usuarios");
                        $query->execute();
                        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                        
                        <?php 
                            foreach($usuarios as $usuario){
                                ?>
                                <tr>
                                    <td> <?= $usuario['Id'] ?></td>
                                    <td> <?= $usuario['Email'] ?></td>
                                    <td> <?= $usuario['Senha'] ?></td>
                                    <td> <?= $usuario['Admin'] ?></td>
                                </tr>
                            <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>