<?php

require_once __DIR__ . "/../Helper/Input.php";
include_once __DIR__ . "/../BusinessLogic/AddTodolist.php";
require_once __DIR__ . "/../Model/TodoList.php";

function viewAddTodolist()
{
    echo <<<TAMBAH
    \n====================================
    \tMENAMBAHKAN TODOLIST\t
    ====================================\n
    TAMBAH;

    $todo = input("Todo (x untuk keluar)");

    if ($todo == "x"){
        echo "Batal menmbahkan todolist" . PHP_EOL;
    } else{
        addTodolist($todo);
    }

}