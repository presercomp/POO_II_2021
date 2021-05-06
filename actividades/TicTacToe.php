<?php
//Incluimos la Clase TicTacToeClass que nos permitira llevar a cabo el juego.
include "TicTacToeClass.php";
//Comprobamos si se ha enviado el tablero o no, para crear la instancia de la clase
$tablero = isset($_POST['tablero']) ? json_decode(base64_decode($_POST['tablero'])) : null;
//Creamos la instancia de la clase, con los datos del tablero (si existe)
$partida = new TicTacToeClass($tablero);
$tablero = $partida->getBoard();
$jugador = isset($_POST['jugador']) ? $_POST['jugador'] : null;
$error = null;
$ganador = null;
if($partida->isWin()){
    //marcamos el ganador y bloqueamos el juego
    $ganador = true;
    $winner_message = "El jugador $jugador ha ganado la partida";
} else {
    if($jugador !== null){
        //Asignamos el simbolo dependiendo del jugador
        $simbolo = $jugador == 1 ? "O" : "X";
        //Capturamos la Columna seleccionada
        $col = isset($_POST['columna']) ? $_POST['columna'] : 0;
        //Capturamos la Fila seleccionada
        $row = isset($_POST['fila']) ? $_POST['fila'] : 0;
        //Si la celda está vacía
        $vacia = $partida->itsFreeCell($col, $row);
        if($vacia){
            //Asignamos el simbolo al luego en el espacio seleccionado
            $partida->play($col, $row, $simbolo);
            //Cambiamos el turno del jugador
            $jugador = $jugador == 1 ? 2 : 1;
            //Y su simbolo
            $simbolo = $jugador == 1 ? "O" : "X";
            $tablero = $partida->getBoard();
            if($partida->isWin()){
                //marcamos el ganador y bloqueamos el juego
                $ganador = true;
                $winner_message = "El jugador $jugador ha ganado la partida";
            }
        } else {
            $error = "La Casilla $col / $row ya se encuentra ocupada";
        }
    } else {
        $jugador = 1;
        $simbolo = "O";
    }
}

$juego = $partida->getBoard();
$a1 = $juego[0][0];
$a2 = $juego[0][1];
$a3 = $juego[0][2];
$b1 = $juego[1][0];
$b2 = $juego[1][1];
$b3 = $juego[1][2];
$c1 = $juego[2][0];
$c2 = $juego[2][1];
$c3 = $juego[2][2];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Gato / TicTacToe</title>
    <!-- Hojas de Estilos -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <style>
    .bt {
        border-top: 1px solid black;
    }
    .bb {
        border-bottom: 1px solid black;
    }
    .bl {
        border-left : 1px solid black;
    } 
    .br {
        border-right: 1px solid black;
    }
    .cell {
        min-height : 50px;
        min-width : 50px;
    }
    </style>


</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h5 class="text-center">Juego GATO</h5>
            </div>
        </div>
    </div>
    <form action="TicTacToe.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-6">Turno del jugador No. <?php echo $jugador; ?></div>
                <div class="col-6"><?php echo $simbolo; ?><input type="hidden" name="jugador" value="<?php echo $jugador; ?>"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-4">Columna: <input class="form-control" type="number" min="0" max="2" value="0" name="columna" <?php echo $ganador ? "disabled" : ""; ?>></div>
                <div class="col-4">Fila   : <input class="form-control" type="number" min="0" max="2" value="0" name="fila"  <?php echo $ganador ? "disabled" : ""; ?>></div>
                <div class="col-4"><label for="" class="control-label">&nbsp;</label><button class="btn btn-primary" <?php echo $ganador ? "disabled" : ""; ?>>Jugar!</button></div>
            </div>
        </div>
        <div class="container">
        <div class="row">
                <div class="col-3 cell text-center"><input type="hidden" name="tablero" value="<?php echo base64_encode(json_encode($tablero)); ?>"></div>
                <div class="col-3 cell text-center"><h6>0</h6></div>
                <div class="col-3 cell text-center"><h6>1</h6></div>
                <div class="col-3 cell text-center"><h6>2</h6></div>
            </div>
            <div class="row">
                <div class="col-3 cell text-center"><h6>0</h6></div>
                <div class="col-3 cell text-center br bb"><?php echo $a1 != "?" ? "<b>".$a1."</b>" : $a1; ?><input type="hidden" name="a1" value="<?php echo $a1; ?>"></div>
                <div class="col-3 cell text-center bb   "><?php echo $b1 != "?" ? "<b>".$b1."</b>" : $b1; ?><input type="hidden" name="a2" value="<?php echo $a2; ?>"></div>
                <div class="col-3 cell text-center bl bb"><?php echo $c1 != "?" ? "<b>".$c1."</b>" : $c1; ?><input type="hidden" name="a3" value="<?php echo $a3; ?>"></div>
            </div> 
            <div class="row"> 
                <div class="col-3 cell text-center"><h6>1</h6></div> 
                <div class="col-3 cell text-center       "><?php echo $a2 != "?" ? "<b>".$a2."</b>" : $a2; ?><input type="hidden" name="b1" value="<?php echo $b1; ?>"></div>
                <div class="col-3 cell text-center  br bl"><?php echo $b2 != "?" ? "<b>".$b2."</b>" : $b2; ?><input type="hidden" name="b2" value="<?php echo $b2; ?>"></div>
                <div class="col-3 cell text-center       "><?php echo $c2 != "?" ? "<b>".$c2."</b>" : $c2; ?><input type="hidden" name="b3" value="<?php echo $b3; ?>"></div>
            </div> 
            <div class="row"> 
                <div class="col-3 cell text-center"><h6>2</h6></div>
                <div class="col-3 cell text-center  br bt"><?php echo $a3 != "?" ? "<b>".$a3."</b>" : $a3; ?><input type="hidden" name="c1" value="<?php echo $c1; ?>"></div>
                <div class="col-3 cell text-center  bt   "><?php echo $b3 != "?" ? "<b>".$b3."</b>" : $b3; ?><input type="hidden" name="c2" value="<?php echo $c2; ?>"></div>
                <div class="col-3 cell text-center  bl bt"><?php echo $c3 != "?" ? "<b>".$c3."</b>" : $c3; ?><input type="hidden" name="c3" value="<?php echo $c3; ?>"></div>
            </div>
        </div>
        <?php if($error !== null) {?>
        <div class="container">
            <div class="row">
                <div class="col-12 alert alert-danger"><?php echo $error; ?></div>
            </div>
        </div>
        <?php } ?>
        <?php if($ganador !== null) {?>
        <div class="container">
            <div class="row">
                <div class="col-12 alert alert-success"><?php echo $winner_message; ?></div>
            </div>
        </div>
        <?php } ?>
    </form>
</body>
</html>