<?php

$archivo = fopen("./json/h.txt", "w+b");

fwrite($archivo, "hihh");

fclose($archivo);