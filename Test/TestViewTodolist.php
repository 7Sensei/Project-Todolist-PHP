<?php

require_once "../View/ViewShowTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";

addTodolist("Beljar PHP");
addTodolist("Beljar Java");
addTodolist("Beljar Python");
addTodolist("Beljar Kotlin");
addTodolist("Beljar C++");

viewShowTodolist();