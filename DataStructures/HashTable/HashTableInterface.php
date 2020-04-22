<?php

namespace DataStructures\HashTable;

interface HashTableInterface
{
    /**
     * Устанавливает ключ => значение
     *
     * @param $key
     * @param $value
     * @return bool
     */
    public function set($key, $value): bool;

    /**
     * Есть ли элемент с таким ключем
     *
     * @param $key
     * @return bool
     */
    public function has($key): bool;

    /**
     * Получить элемент по ключу
     *
     * @param $key
     * @return mixed
     */
    public function get($key);

    /**
     *
     *
     * @param $key
     * @return mixed
     */
    public function delete($key);


    /**
     * @return mixed
     */
    public function clear();
}