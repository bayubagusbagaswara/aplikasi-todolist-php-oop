<?php

require_once __DIR__ . "/../entity/Todolist.php";
require_once __DIR__ . "/../service/TodolistService.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../view/TodolistView.php";
require_once __DIR__ . "/../helper/InputHelper.php";


use \Entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    // masukan beberapa data
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    // view nya show todolist
    $todolistView->showTodolist();
}

testViewShowTodolist();
