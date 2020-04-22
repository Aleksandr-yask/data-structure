<?php
namespace DataStructures\Stacks;

interface StackInterface
{
    /**
     * Добавление элемента в начало
     *
     * @param $element
     * @return array
     */
    public function push($element): array;

    /**
     * Удаление из начала
     *
     * @return mixed
     */
    public function pop();

    /**
     * Получение первого элемента
     *
     * @return mixed
     */
    public function pip();

    /**
     * Получение длины
     *
     * @return int
     */
    public function length(): int;

}