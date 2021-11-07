<?php

require_once "../Helper/Input.php";

$name = input("Nama");
echo "Hello $name " . PHP_EOL;

$umur = input("Umur");
echo "$name berumur : $umur" . PHP_EOL;