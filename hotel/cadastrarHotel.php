<?php 

require_once "../bd/login.php";
# Coloca as informações do form nas variáveis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image= $_POST["newImage"];
    $name = $_POST["name"];
    $address = $_POST["newaddress"];

    # Chama a função de cadastrar o usuário com as informações do form 
    cadastrar($image, $name, $address);
}

# Cadastra um novo usuário no banco de dados
function cadastrar($image, $name, $address) {
    $criouHotel = cadastrarHotel(, $name, $address);
    if (!$criouHotel) {
        echo "<script>alert('Erro ao criar usuário.')</script>";
    }
    echo "<script>alert('Usuário criado com sucesso!')</script>";
}

?>