<?php

header("Content-type: text/plain");

if(isset($_POST)) {
}
$archivo = fopen("existe.txt", "w+b");
fclose($archivo);