<?php


namespace DataStructures\HashTable;


class HashTable implements HashTableInterface
{
    private $items = [];
    private $count = 0;

    private $hash;

    public function __construct()
    {
        $this->hash = new Hash();
    }

    /**
     * @inheritDoc
     */
    public function set($key, $value): bool
    {
        $key = $this->hash->hash($key);

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
        $key = $this->hash->hash($key);
        if (isset($this->items[$key])) return true;

        return false;
    }

    /**
     * @inheritDoc
     */
    public function get($key)
    {
        $key = $this->hash->hash($key);
        return $this->items[$key];
    }

    /**
     * @inheritDoc
     */
    public function delete($key)
    {
        $key = $this->hash->hash($key);
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