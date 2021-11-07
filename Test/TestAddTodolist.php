<?php

require_once "../BusinessLogic/AddTodolist.php";
require_once "../Model/TodoList.php";

AddTodolist("Mahardika");
AddTodolist("Aditya");
AddTodolist("Septianika");

var_dump($todolist);