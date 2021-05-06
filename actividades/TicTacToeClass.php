<?php

class TicTacToeClass {
    private $board;

    /**
     * Constructor de la clase
     *
     * @param array $board (opcional) Tablero de juego
     */
    public function __construct(array $board = null){
        if($board == null){
            $this->board = array(array('?','?','?'), array('?','?','?'), array('?','?','?'));
        } else {
            $this->board = $board;
        }
    }

    /**
     * Devuelve el tablero de juego para ser dibujado en la pantalla
     *
     * @return void
     */
    public function getBoard(){
        return $this->board;
    }

    /**
     * Verifica que la casilla está disponible para jugar
     *
     * @param integer $column
     * @param integer $row
     * @return void
     */
    public function itsFreeCell(int $column, int $row){
        return $this->board[$column][$row] == '?';
    }

    /**
     * Asigna el simbolo a la casilla correspondiente
     *
     * @param integer $column
     * @param integer $row
     * @param String $symbol
     * @return void
     */
    public function play(int $column, int $row, String $symbol){
        $this->board[$column][$row] = $symbol;
    }

    /**
     * Verifica si el tablero tiene ganador o no
     *
     * @return void
     */
    public function isWin(): bool{
        $win = false;
        //primera fila
        if($this->board[0][0] == $this->board[0][1] and $this->board[0][1] == $this->board[0][2] && $this->board[0][0] !== '?'){
            $win = true;
        }
        //segunda fila
        if($this->board[1][0] == $this->board[1][1] and $this->board[1][1] == $this->board[1][2] && $this->board[1][0] !== '?'){
            $win = true;
        }
        //tercera fila
        if($this->board[2][0] == $this->board[2][1] and $this->board[2][1] == $this->board[2][2] && $this->board[2][0] !== '?'){
            $win = true;
        }
        //primera columna
        if($this->board[0][0] == $this->board[1][0] and $this->board[1][0] == $this->board[2][0] && $this->board[0][0] !== '?'){
            $win = true;
        }
        //segunda columna
        if($this->board[0][1] == $this->board[1][1] and $this->board[1][1] == $this->board[2][1] && $this->board[0][1] !== '?'){
            $win = true;
        }
        //tercera columna
        if($this->board[0][2] == $this->board[1][2] and $this->board[1][2] == $this->board[2][2] && $this->board[0][2] !== '?'){
            $win = true;
        }
        //primera diagonal
        if($this->board[0][0] == $this->board[1][1] and $this->board[1][1] == $this->board[2][2] && $this->board[0][0] !== '?'){
            $win = true;
        }
        //segunda diagonal
        if($this->board[0][2] == $this->board[1][1] and $this->board[1][1] == $this->board[2][0] && $this->board[0][2] !== '?'){
            $win = true;
        }
        return $win;
    }

}