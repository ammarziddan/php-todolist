<?php

// Menghapus todo list
function removeTodoList(int $number)
{
    global $todolistArray;

    if ($number > count($todolistArray) || $number < 1) {
        return false;
    }

    for ($i = $number; $i < count($todolistArray); $i++) {
        $todolistArray[$i] = $todolistArray[$i + 1];
    }

    unset($todolistArray[count($todolistArray)]);

    return true;
}
