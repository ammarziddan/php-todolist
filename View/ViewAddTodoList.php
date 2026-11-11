<?php

require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';

function viewAddTodoList()
{
    echo "Tambah Todo" . PHP_EOL;

    $input = input("Todo (x. batal)");

    if ($input == 'x') {
        echo "Batal tambah todo list" . PHP_EOL;
    } else {
        addTodoList($input);
    }
}
