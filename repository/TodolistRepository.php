<?php

namespace Repository {

    use Entity\Todolist;

    // bikin abstraksi layer
    // seperti kita bikin interface nya dulu

    interface TodolistRepository
    {
        // bikin function-function yang berhubungan dengan data todolist
        function save(Todolist $todolist): void;
        function remove(int $number): bool;
        function findAll(): array; // balikannya adalah array isinya todolist
    }

    // buat sebuah class untuk implementasi TodolistRepository
    class TodolistRepositoryImpl implements TodolistRepository
    {
        // buat representasi datanya
        public array $todolist = array();

        function save(Todolist $todolist): void
        {
            // untuk menambah data todolist
            $number = sizeof($this->todolist) + 1;
            $this->todolist[$number] = $todolist;
        }

        function remove(int $number): bool
        {
            if ($number > sizeof($this->todolist)) {
                return false;
            }
            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                // ngegeser
                $todolist[$i] = $this->todolist[$i + 1];
            }

            unset($this->todolist[sizeof($this->todolist)]);

            return true;
        }
        function findAll(): array
        {
            return $this->todolist;
        }
    }
}
