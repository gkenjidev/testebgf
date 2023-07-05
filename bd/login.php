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

    function cadastrarUsuario($cpf, $name, $password) {
        # Faz a conexão com o banco de dados
        $conn = conectarBanco();

        # Query SQL para verificar se já existe o usuário cadastrado
        $sql = "SELECT * FROM clientes WHERE cpf='$cpf'";
        $resultado = $conn -> query($sql);
        if ($resultado -> num_rows > 0) {
            # Caso ache um usuário, retorna um erro
            return null;
        } else {
            # Caso não tenha usuário, adiciona no banco de dados
            $sql = "INSERT INTO clientes (cpf, name, password) VALUES ('$cpf', '$name', '$password')";
            $resultado = $conn -> query($sql);

            if ($resultado == true) {
                # Caso crie o usuário com sucesso, retorna uma mensagem
                return $resultado;
            }else {
                # Caso dê erro ao criar usuário, retorna um erro
                return null;
            }
        }
    }
?>