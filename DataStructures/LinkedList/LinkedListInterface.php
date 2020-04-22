<?php

namespace DataStructures\LinkedList;

use DataStructures\LinkedList\Element;

interface LinkedListInterface
{

    /**
     * Добавление в начало
     *
     * @param string $value - значение
     * @return Element - Новый элемент
     */
    public function add(string $value): Element;

    /**
     * Добавление в конец
     *
     * @param string $value - значение
     * @return Element - Новый элемент
     */
    public function addUnshift(string $value): Element;

    /**
     * @param string $value
     * @param int $index
     * @return Element
     */
    public function addBefore(string $value, int $index): Element;

    /**
     * Удаление по значению
     *
     * @param string $value
     * @param bool $prevElement
     * @return Element - след. элемент по счету если $prevElement = false
     * и предыдущий, если $prevElement = true
     */
    public function removeByValue(string $value, bool $prevElement = false): ?Element;

    /**
     * Удаление по ключу
     *
     * @param int $index
     * @param bool $prevElement
     * @return Element - след. элемент по счету если $prevElement = false
     * и предыдущий, если $prevElement = true
     */
    public function removeByIndex(int $index, bool $prevElement = false): ?Element;

    /**
     * @param string $value
     * @return int|null
     */
    public function indexOf(string $value): ?int;

    /**
     * Возвращает по значению
     *
     * @param string $value
     * @return Element
     */
    public function getByValue(string $value): ?Element;

    /**
     * Возвращает по ключу
     *
     * @param int $index
     * @return Element
     */
    public function getByIndex(int $index): ?Element;


    /**
     * Возвращает длину листа
     *
     * @return int
     */
    public function getSize(): int;


    /**
     * Возвращает первый элемент
     *
     * @return Element
     */
    public function getHead(): ?Element;

    /**
     * @return bool
     */
    public function isEmpty(): bool;

}
