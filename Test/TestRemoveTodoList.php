<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';

$todolistArray[1] = "Belajar PHP Dasar";
$todolistArray[2] = "Belajar PHP OOP";
$todolistArray[3] = "Belajar PHP Database";
$todolistArray[4] = "Belajar Docker";
$todolistArray[5] = "Belajar React.js";

showTodoList();

removeTodoList(3);
showTodoList();

removeTodoList(2);
showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();
