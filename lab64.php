<?php 

include("class_lib.php");


print Foo::$mi_static . " value (1) <br>";

$foo = new Foo();
print $foo->staticValor() . " values (2) <br>";

print $foo->mi_static . " values (3) <br>";

print Bar::$mi_static . " value (4) <br>";

$bar = new Bar();
print $bar->fooStatic() . " value (5) <br>";



?>