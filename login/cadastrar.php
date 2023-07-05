<?php 

require_once "../bd/login.php";
# Coloca as informações do form nas variáveis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["newCpf"];
    $name = $_POST["name"];
    $password = $_POST["newPassword"];

    # Chama a função de cadastrar o usuário com as informações do form 
    cadastrar($cpf, $name, $password);
}

# Cadastra um novo usuário no banco de dados
function cadastrar($cpf, $name, $password) {
    $criouUsuario = cadastrarUsuario($cpf, $name, $password);
    if (!$criouUsuario) {
        echo "<script>alert('Erro ao criar usuário.')</script>";
    }
    echo "<script>alert('Usuário criado com sucesso!')</script>";
}

?>