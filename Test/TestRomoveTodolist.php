<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodolist.php";
require_once "../BusinessLogic/RemoveTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";

addTodolist("Paijan");
addTodolist("Elliysa");
addTodolist("Shakira");
addTodolist("Adelle");
addTodolist("Happy");

showTodolist();

removeTodolist(2);

showTodolist(); 