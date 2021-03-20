<?php

$archivo = fopen("http://work-shift.herokuapp.com/t.text", "w+b");

fwrite($archivo, "hihh");

fclose($archivo);