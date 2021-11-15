<?php

require_once "../BusinessLogic/AddTodolist.php";
require_once "../View/ViewAddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";

addTodolist("Nopek");
addTodolist("Hardian");
addTodolist("Sahaja");

viewAddTodolist();

showTodolist();

viewAddTodolist();

showTodolist();