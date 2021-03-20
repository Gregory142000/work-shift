<?php

$archivo = fopen("existe.txt", "w+b");

fwrite($archivo, "hihh");

fclose($archivo);