<?php

header("Content-tye: text/plain");

if(isset($_POST['envelope'])) {
  $archivo = fopen("json/existe.txt", "w+b");
  fclose($archivo);
}