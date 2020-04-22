<?php


namespace DataStructures\Queues;


class Queue implements QueueInterface
{
    private $items = [];
    private $count = 0;

    /**
     * @inheritDoc
     */
    public function enqueue($element)
    {
        array_unshift($this->items, $element);
        $this->count++;
        return $element;
    }

    /**
     * @inheritDoc
     */
    public function dequeue()
    {
        $this->count--;
        return array_pop($this->items);
    }

    /**
     * @inheritDoc
     */
    public function length(): int
    {
        return $this->count;
    }

    /**
     * @inheritDoc
     */
    public function get(): array
    {
        return $this->items;
    }
}