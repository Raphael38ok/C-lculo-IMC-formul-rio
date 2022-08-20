<?php
$nome = $_POST['nome'];
$peso =$_POST['peso'];
$altura =$_POST['altura'];
$imc = $peso/($altura*$altura);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Calculo</title>
</head>

<body>

    <div class="container">
        <div style="margin-top: 10px; padding: 10px;" class="jumbotron text-center">
            <h2>CEET - VASCO COUTINHO</h2>
            <h4>Programação Web - Noturno - 2022/2</h4>
        </div>
        <div>
            <h3>Resultado do IMC de <?php echo $nome ?></h3>
            <h4>Imc = <?php echo number_format($imc,2); ?> </h4>
			<!-- aqui ficará os componentes do formulário -->
            
        </div>

    </div>
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>