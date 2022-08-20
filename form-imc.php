<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Formulário IMC</title>
</head>

<body>

    <div class="container">
        <div style="margin-top: 10px; padding: 10px;" class="jumbotron text-center">
            <h2>CEET - VASCO COUTINHO</h2>
            <h4>Programação Web - Noturno - 2022/2</h4>
        </div>
        <div>
            <h3>Formulário Cálculo de IMC</h3>
            <!-- aqui ficará os componentes do formulário -->
            <form action="calculo-imc.php" method="POST">

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Entre com nome" name="nome">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="peso">Peso:</label>
                    <input type="text" class="form-control" id="peso" placeholder="Entre com peso" name="peso">
                </div>
            </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="altura">Altura:</label>
                    <input type="text" class="form-control" id="altura" placeholder="Entre com altura" name="altura">
                </div>
            </div>
           <div class="col-sm-6">
	    
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
		
	<!-- 	<button type="button" class="btn btn-warning">Voltar</button> -->
		
    
	</div>
</div>

</form>
        <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>