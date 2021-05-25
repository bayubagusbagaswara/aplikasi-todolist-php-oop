<?php

namespace Service {

    interface TodolistService
    {
        // action yang ingin kita buat
        // showTodolist
        // addTodolist
        // removeTodolist
        function showTodolist(): void;
        function addTodolist(string $todo): void;
        function removeTodolist(int $number): void;
    }
}
