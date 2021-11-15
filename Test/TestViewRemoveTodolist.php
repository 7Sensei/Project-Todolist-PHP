<?php

require_once "../BusinessLogic/ShowTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../View/ViewRemoveTodolist.php";
require_once "../Model/TodoList.php";

addTodolist("Nur");
addTodolist("Adian");
addTodolist("Bella");   
addTodolist("Yayan");

showTodolist();

removeTodolist(10);

showTodolist();