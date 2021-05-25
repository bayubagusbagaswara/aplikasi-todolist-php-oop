<?php

namespace Service {

    use Entity\Todolist;
    use Repository\TodolistRepository;

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

    class TodolistServiceImpl implements TodolistService
    {

        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
            foreach ($this->todolistRepository as $number => $value) {
                echo "$number. $value" . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            // butuh entity todolist
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
            echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
        }

        function removeTodolist(int $number): void
        {
        }
    }
}
