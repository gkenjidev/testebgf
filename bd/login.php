<?php 
    require_once "conexao.php";

    function buscarUsuario($cpf, $password) {
        $conn = conectarBanco();
        $sql = "SELECT * FROM clientes WHERE cpf='$cpf' AND password='$password'";
        $usuario = $conn -> query($sql);
        if ($usuario -> num_rows > 0) {
            return $usuario;
        }
        $conn -> close();
        return $usuario;
    }

    function cadastrarUsuario($id) {
    }
?>