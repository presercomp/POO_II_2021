<?php
//Capturamos los datos del formulario, solo si se han enviado
//Si existe la variable GET operando, asingamos el valor, de lo contrario, será nulo
$operando = isset($_GET['operando']) ? $_GET['operando'] : null;
//Si existe la variable GET operador, asingamos el valor, de lo contrario, será nulo
$operador = isset($_GET['operador']) ? $_GET['operador'] : null;
//Si existe la variable GET operacion, asingamos el valor, de lo contrario, será nulo
$operacion = isset($_GET['operacion']) ? $_GET['operacion'] : null;
//Creamos una variable resultado, inicialidad como nulo
$resultado = null;
//Verificamos que estén presentes las tres variables para realizar la operación.
if($operando !== null && $operador !== null && $operacion !== null){
    $resultado = 0;
    switch($operacion){
        case "+":
            $resultado = $operando + $operador;
            break;
        case "-":
            $resultado = $operando - $operador;
            break;
        case "/":
            $resultado = $operando / $operador;
            break;
        case "*":
            $resultado = $operando * $operador;
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Muy Básica</title>
    <!-- Hojas de Estilos -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="arimetica.php" method="GET">
                    <div class="form-group">
                        <label for="operando" class="label-control">Primer Número</label>
                        <input type="number" class="form-control" id="operando" name="operando">
                    </div>
                    <div class="form-group">
                        <label for="operacion" class="label-control">Operación</label>
                        <select name="operacion" id="operacion" class="form-control">
                            <option value="+">Suma</option>
                            <option value="-">Resta</option>
                            <option value="/">División</option>
                            <option value="*">Multiplicación</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="operador" class="label-control">Segundo Número</label>
                        <input type="number" class="form-control" id="operador" name="operador">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-calculator"></i> Calcular</button>
                    </div>
                </form>
            </div>
        </div>
        <?php if($resultado !== null){ ?>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info">
                    El resultado de su operacion <?php echo $operando.$operacion.$operador;?> es <?php echo $resultado;?>
                </div>
            </div>    
        </div>
        <?php } ?>
    </div>
</body>
</html>