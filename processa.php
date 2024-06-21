<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        function imprimir(){
            window.print();
        
        }
    </script>
    <title>Document</title>
</head>
<body>
    <p>
    <?php
    if(isset($_POST['enviado'])){
        foreach($_POST['enviado'] as $env){
            echo "$env<br>";
        }
    }
    ?>
    </p>
    <buttom onclick="imprimir()">imprimir</buttom>
</body>
</html>