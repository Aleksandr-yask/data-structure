<?php

namespace DataStructures\Sets;


interface SetInterface
{

    /**
     * Выводит множество
     *
     * @return array
     */
    public function get(): array;

    /**
     * Получает Index по значению в множестве
     *
     * @param $value
     * @return int
     */
    public function getIndexByValue($value): ?int;

    /**
     * Добавляет в конец множества элемент
     *
     * @param $element
     * @return bool
     */
    public function add($element): bool;

    /**
     * Удаляет элемент с индеком
     *
     * @param $index
     * @return bool
     */
    public function remove($index): bool;

    /**
     * @return int
     */
    public function count(): int;


    /**
     * Объеденяет все элементы множеств (без дубликата)
     *
     * @param Set $set
     * @return Set
     */
    public function union(Set $set): Set;

    /**
     * Создает новое множество из элементов присутствующие в обоих множествах
     *
     * @param Set $set
     * @return Set
     */
    public function intersection(Set $set): Set;

    /**
     * Выводит множество состоящее из элементов присутствующих
     * в this->items и остутствующих в $set->items
     *
     * @param Set $set
     * @return Set
     */
    public function difference(Set $set): Set;

    /**
     * Включает ли множество $set->items все элементы множества this->items
     *
     * @param Set $set
     * @return bool
     */
    public function isSubset(Set $set): bool;

}