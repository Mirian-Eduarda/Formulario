<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário</h1>
<?php


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST ['nome'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['sexo'];
        $status = $_POST['status'];
        $mensagem = $_POST['mensagem'];
    
     }
    
    //Dompdf
    require 'vendor/autoload.php';

    //namespace Dompdf
    use Dompdf\Dompdf;

    //classe Dompdf
    $dompdf = new Dompdf();

    //Enviar o conteudo do pdf
    $dompdf->loadHtml ('index.html');

    //Propriedades de impressao
    $dompdf->setPaper('A4', 'landscape');

    //Renderizar pra pdf o Html
    $dompdf->render();

    //Gerar pdf
    $dompdf->stream();
?>
</body>
</html>
