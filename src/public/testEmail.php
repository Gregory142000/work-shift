<?php

$archivo = fopen("http://work-shift.herokuapp.com/json/h.txt", "w+b");

fwrite($archivo, "hihh");

fclose($archivo);