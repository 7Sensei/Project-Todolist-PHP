<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodolist.php";

function viewRemoveTodolist()
{

    echo <<<HAPUS
    \n====================================
    \tMENGHAPUS TODOLIST\t
    ====================================\n
    HAPUS;

    $userInput = input("Masukan angka (x untuk keluar)");

    if ($userInput == "x"){
        echo "Keluar menambahkan todolist" . PHP_EOL;
    } else {
        $succes = removeTodolist($userInput);

        if ($succes){
            echo "Berhasil menghapus todo nomer $userInput" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomer $userInput" . PHP_EOL;
        }
    }


}