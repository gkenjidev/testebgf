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
?>