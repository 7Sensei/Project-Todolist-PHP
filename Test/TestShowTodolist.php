<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodolist.php";

$todolist[0] = "Belajar PHP Dasar";
$todolist[1] = "Belajar Java Dasar";
$todolist[2] = "Belajar Python Dasar";
$todolist[3] = "Belajar JavaScript Dasar";
$todolist[4] = "Belajar Kotlin Dasar";

showTodolist();
echo "\n";
$userInput = readline("Masukan angka yang anda pilih : ");