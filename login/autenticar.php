<?php
require_once "../bd/login.php";
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $cpf = $_POST ["cpf"];
    $password = $_POST ["password"];
echo $cpf, $password;
    autenticarUsuario($cpf,$password);

}
function autenticarUsuario($cpf,$password){


$usuario = buscarUsuario ($cpf,$password);
if($usuario){
 
    header('Location: ../hotel/reserva.php');

}
echo"CPF ou senha invalidos";
die ("morto");
}



?>