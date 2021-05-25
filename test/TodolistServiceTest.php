<?php

require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist(): void
{
    // coba tampilkan todolist hasilnya benar atau salah

    $todolistRepository = new TodolistRepositoryImpl;
    // misal kita tambahkan todolistnya dulu
    $todolistRepository->todolist[1] = "Belajar PHP";
    $todolistRepository->todolist[2] = "Belajar PHP OOP";
    $todolistRepository->todolist[3] = "Belajar PHP Database";

    $todolistService = new TodolistServiceImpl($todolistRepository);

    // ngetestnya
    $todolistService->showTodolist();
}

testShowTodolist();
