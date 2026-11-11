<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';

addTodoList('Muhammad');
addTodoList('Ammar');
addTodoList('Ziddan');

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
