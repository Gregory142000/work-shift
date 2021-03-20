<?php

header("Content-type: text/plain");

if(isset($_POST['envelope'])) {
  $archivo = fopen("existe.txt", "w+b");
  fclose($archivo);
}