<?php


namespace DataStructures\Maps;


class Map implements MapInterface
{
    private $items = [];
    private $count = 0;

    /**
     * @inheritDoc
     */
    public function set($key, $value): bool
    {
        if (!isset($this->items[$key])) {
            $this->items[$key] = $value;
            $this->count++;
            return true;
        }
        return false;
    }

    /**
     * @inheritDoc
     */
    public function has($key): bool
    {
        if (isset($this->items[$key])) return true;

        return false;
    }

    /**
     * @inheritDoc
     */
    public function get($key)
    {
        return $this->items[$key];
    }

    /**
     * @inheritDoc
     */
    public function delete($key)
    {
        if (isset($this->items[$key])) {
            unset($this->items[$key]);
            $this->count--;
        }
    }

    /**
     * @inheritDoc
     */
    public function clear()
    {
        $this->items = [];
    }
}