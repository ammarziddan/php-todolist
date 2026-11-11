<?php

// MENAMPILKAN SEMUA TODO LIST
function showTodoList()
{
    global $todolistArray;

    echo "TODO LIST : " . PHP_EOL;

    foreach ($todolistArray as $number => $todo) {
        echo "{$number}. $todo" . PHP_EOL;
    }
}
