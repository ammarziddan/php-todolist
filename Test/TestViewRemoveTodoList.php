<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../View/ViewRemoveTodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';

addTodoList('Muhammad');
addTodoList('Ammar');
addTodoList('Ziddan');

showTodoList();

viewRemoveTodoList();

showTodoList();
