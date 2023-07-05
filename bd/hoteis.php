<?php 
    require_once "conexao.php";

    function getHoteis() {
        $conn = conectarBanco();
        $sql = "SELECT * FROM hoteis";
        $hoteis = $conn -> query($sql);
        $conn -> close();

        return $hoteis;
    }

    function buscarHotel($id) {
        $conn = conectarBanco();
        $sql = "SELECT * FROM hoteis WHERE id=$id LIMIT 1";
        $hotel = $conn -> query($sql);
        $conn -> close();

        if ($hotel -> num_rows > 0) {
            return $hotel -> fetch_assoc();
        }
        return null;
    }

    function criarHotel($name, $address, $image) {
        # Faz a conexão com o banco de dados
        $conn = conectarBanco();

        # Query SQL para verificar se já existe o usuário cadastrado
        $sql = "SELECT * FROM hoteis WHERE date='$address'";
        $resultado = $conn -> query($sql);
        if ($resultado -> num_rows > 0) {
            # Caso ache um usuário, retorna um erro
            return null;
        } else {
            # Caso não tenha usuário, adiciona no banco de dados
            $sql = "INSERT INTO hoteis (name, address, image) VALUES ('$name', '$address', '$image')";
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