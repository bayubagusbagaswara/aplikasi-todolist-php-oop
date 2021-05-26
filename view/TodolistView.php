<?php

// implementasi view nya
namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView
    {
        // manggil service nya
        private TodolistService $todolistService;
        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            // view menampilkan todolist
            while (true) {
                $this->todolistService->showTodolist();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "3. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");
                if ($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                    $this->removeTodolist();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }
            echo "Sampai jumpa lagi" . PHP_EOL;
        }
        function addTodolist(): void
        {
        }
        function removeTodolist(): void
        {
        }
    }
}
