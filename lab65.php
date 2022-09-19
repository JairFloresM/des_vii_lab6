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
    public function masTest() {
        echo "ClaseHija::masTest() llamada \n";
    }
}

//La Aplicación sa error porque masTest de la clase hija está intentando 
//sobreescribir el metodo de la clase padre, pero no puedo porque la clase
// padre tiene el modificador de acceso en "final" y no le dejar modificarlo

?>