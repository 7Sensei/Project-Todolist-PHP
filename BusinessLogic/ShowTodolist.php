<?php

function showTodolist()
{
    global $todolist;

    echo "=======================\n";
    echo "\tTODOLIST\t" . PHP_EOL;
    echo "=======================\n";
    
    foreach( $todolist as $key => $value){
        echo "$key. $value" . PHP_EOL;
    }

} 