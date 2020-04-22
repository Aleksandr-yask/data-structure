<?php


namespace DataStructures\Sets;


class Set implements SetInterface
{
    private $items = [];
    private $count = 0;


    /**
     * @inheritDoc
     */
    public function get(): array
    {
        return $this->items;
    }

    /**
     * @inheritDoc
     */
    public function getIndexByValue($value): ?int
    {
        $index = array_search($value, $this->items);
        return $index !== false ? $index : null;
    }

    /**
     * @inheritDoc
     */
    public function add($element): bool
    {
        if (array_search($element, $this->items) === false) {
            $this->items[$this->count] = $element;
            $this->count++;
            return true;
        }

        return false;
    }

    /**
     * @inheritDoc
     */
    public function remove($element): bool
    {
        $index = array_search($element, $this->items);
        if ($index === false) {
            unset($this->items[$index]);
            sort($this->items);
            return true;
        }

        return false;
    }

    /**
     * @inheritDoc
     */
    public function count(): int
    {
        return $this->count;
    }



    /**
     * @inheritDoc
     */
    public function union(Set $set): Set
    {
        $newSet = new Set();
        $currentSetValue = $this->get();
        $otherSet = $set->get();

        foreach ($currentSetValue as $value) {
            $newSet->add($value);
        }

        foreach ($otherSet as $value) {
            $newSet->add($value);
        }

        return $newSet;

    }

    /**
     * @inheritDoc
     */
    public function intersection(Set $set): Set
    {
        $newSet = new Set();
        $forForeach = ($set->count() > $this->count) ? $this->items : $set->items;
        $second = !($set->count() > $this->count) ? $this->items : $set->items;

        foreach ($forForeach as $value) {
            if (array_search($value, $second) !== false) {
                $newSet->add($value);
            }
        }

        return $newSet;
    }

    /**
     * @inheritDoc
     */
    public function difference(Set $set): Set
    {
        $newSet = new Set();

        foreach ($this->items as $value) {
            if (array_search($value, $set->items) === false) {
                $newSet->add($value);
            }
        }

        return $newSet;
    }

    /**
     * @inheritDoc
     */
    public function isSubset(Set $set): bool
    {
        foreach ($set->items as $value) {
            if (array_search($value, $this->items) === false) {
                return false;
            }
        }

        return true;
    }
}