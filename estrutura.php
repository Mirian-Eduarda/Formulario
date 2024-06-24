<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['sexo'];
        $status = $_POST['status'];
        $enviado = $_POST['enviado'];
        $mensagem = $_POST['mensagem'];
    } else {
        header ("Location: index.html");
    }
 
?>