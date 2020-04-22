<?php

namespace DataStructures\Queues;



interface QueueInterface
{

    /**
     * Добавление в начало
     *
     * @param mixed $element
     * @return mixed
     */
    public function enqueue($element);

    /**
     * Удаление из конца
     *
     * @return mixed
     */
    public function dequeue();

    /**
     * Полуучение длины
     *
     * @return int
     */
    public function length(): int;

    /**
     * Получает всю очередь
     *
     * @return array
     */
    public function get(): array;
}