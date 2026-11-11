<?php

// Menambah todo list
function addTodoList(string $todo): void
{
    global $todolistArray;

    $number = count($todolistArray) + 1;

    $todolistArray[$number] = $todo;
}
