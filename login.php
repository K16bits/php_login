<?php 
    session_start();
    $con = new PDO("mysql:host=localhost;dbname=projeto","root","");

    $query = $con->prepare("SELECT * FROM usuarios WHERE Email = :Email");

    $query->bindParam(':Email', $_POST['Email'], PDO::PARAM_STR);
    $query->execute();

    if(! $query->rowCount() ){
        echo 'Não tem esse emal';
        header('Location: main.html');
        return false;
    }

    $data = $query->fetch(PDO::FETCH_ASSOC); //virou a variavel do DB


    if ($_POST['senha'] != $data['Senha']) {
        echo "senha incorreta";
        header('Location: main.html');
        return false;
    }

    $_SESSION = $data;
    $_SESSION['online'] = true;
    
    echo '<pre>';
    print_r($_SESSION);
    
    header('Location: dashbord.php');
?>