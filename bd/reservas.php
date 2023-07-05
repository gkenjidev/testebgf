<?php 
    require_once "conexao.php";

    function getReservas($id) {
        $conn = conectarBanco();
        $sql = "SELECT * FROM reservas WHERE id=$id LIMIT 1";
        $reservas = $conn -> query($sql);
        $conn -> close();

        if ($reservas -> num_rows > 0) {
            return $reservas -> fetch_assoc();
        }
        return null;
    }

    function criarReserva($cpf, $date) {
        # Faz a conexão com o banco de dados
        $conn = conectarBanco();

        # Query SQL para verificar se já existe o usuário cadastrado
        $sql = "SELECT * FROM reservas WHERE date='$date'";
        $resultado = $conn -> query($sql);
        if ($resultado -> num_rows > 0) {
            # Caso ache um usuário, retorna um erro
            return null;
        } else {
            # Caso não tenha usuário, adiciona no banco de dados
            $sql = "INSERT INTO reservas (cpf, date) VALUES ('$cpf', '$date')";
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