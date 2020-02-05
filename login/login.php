<?php


$email = $_POST['email'];
$senha = $_POST['senha'];

session_start();


if($email === 'lucas@gmail.com' & $senha === 'lucas123'){
    header('Location:home.php');
    $_SESSION['logado'] = true;
}else{
    $_SESSION['erro'] = 'usuario ou senha inválidos';
    header('Location:index.php');

}