<?php

require_once __DIR__ . "/../BusinessLogic/ShowTodolist.php";
require_once __DIR__ . "/../View/ViewAddTodolist.php";
require_once __DIR__ . "/../View/ViewRemoveTodolist.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";

function viewShowTodolist()
{
    while(true){

        showTodolist();

        echo <<<Menu
        
        ===================
                MENU
        ===================
        1. Menambah Todolist
        2. Hapus Todolits
        x. Keluar\n
        Menu;

        $userInput = input("Pilih Nomer");

        if($userInput == "1"){
            viewAddTodolist();
        }else if($userInput == "2"){
            viewRemoveTodolist();
        }else if($userInput == "x"){
            echo "Anda keluar";
            break;
        }else{
            echo "Nomer $userInput tidak diketahui, Mohon menginputkan nomer yang benar" . PHP_EOL;
        }
    }

}