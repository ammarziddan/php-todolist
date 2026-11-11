<?php

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';

function viewRemoveTodoList()
{
    echo "Menghapus Todo" . PHP_EOL;

    $pilihan = input("Nomor (x. batal)");

    if ($pilihan == 'x') {
        echo "Batal menghapus" . PHP_EOL;
    } elseif (!ctype_digit($pilihan)) {
        echo "Pilihan tidak valid" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
