<?php

class ClaseBase {
    public function test() {
        echo "ClaseBase::test() llamada \n";
    }

    final public function masTest() {
        echo "ClaseBase::masTest() llamada \n";
    }
}

class ClaseHija extends ClaseBase {
    
}

// está la aplicación si ejecuta peri igual no muesta nada porque no se intanciado la clas
// y comparado con el problema anterio, es que ya no se esta sobreescribiendo un
// funcion de tipo final (porque no se puede cambiar, esa es la idea del final)

?>