<?php

namespace DataStructures\Stacks;


class Stack implements StackInterface
{

    private $items = [];

    private $count = 0;

    /**
     * @inheritDoc
     */
    public function push($element): array
    {
        $this->items[$this->count] = $element;
        $this->count++;
        return $this->items;
    }

    /**
     * @inheritDoc
     */
    public function pop()
    {
        if ($this->count === 0) return null;

        $elem = $this->items[$this->count-1];
        unset($this->items[$this->count-1]);
        $this->count--;
        return $elem;
    }

    /**
     * @inheritDoc
     */
    public function pip()
    {
        return $this->items[$this->count-1];
    }

    /**
     * @inheritDoc
     */
    public function length(): int
    {
        return $this->count;
    }
}