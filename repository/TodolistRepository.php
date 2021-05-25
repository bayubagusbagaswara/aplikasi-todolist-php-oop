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
        }

        function remove(int $number): bool
        {
            return true;
        }
        function findAll(): array
        {
            return $this->todolist;
        }
    }
}
