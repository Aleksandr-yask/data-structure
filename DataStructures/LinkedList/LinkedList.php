<?php

namespace DataStructures\LinkedList;

class LinkedList implements LinkedListInterface
{

    private $length = 0;

    /** @var Element null */
    private $head = null;

    /**
     * @inheritDoc
     */
    public function add(string $value): Element
    {
        $element = new Element();
        $element->value = $value;

        if ($this->head === null) {
            $this->length++;
            $this->head = $element;
            return $element;
        }

        /** @var Element $currentHead */
        $currentHead = $this->head;

        while ($currentHead->next) {
            $currentHead = $currentHead->next;
        }

        $currentHead->next = $element;
        $element->prev = $currentHead;
        $this->length++;

        return $element;
    }

    /**
     * @inheritDoc
     */
    public function addUnshift(string $value): Element
    {
        $element = new Element();
        $element->value = $value;

        if ($this->head === null) {
            $this->length++;
            $this->head = $element;
            return $element;
        }

        /** @var Element $currentHead */
        $currentHead = $this->head;
        while ($currentHead->next) {
            $currentHead = $currentHead->next;
        }

        $element->prev = $currentHead;
        $currentHead->next = $element;
        $this->length++;

        return $element;
    }

    /**
     * @inheritDoc
     */
    public function addBefore(string $value, int $index): Element
    {
        $element = new Element();
        $element->value = $value;

        if ($this->head === null) {
            $this->length++;
            $this->head = $element;
            return $element;
        }

        /** @var Element $currentHead */
        $currentHead = $this->head;

        $previousElement = null;
        $count = 0;
        while ($count < $index) {
            $count++;
            $previousElement = $currentHead;
            $currentHead = $currentHead->next;
        }

        $element->prev = $previousElement;
        $element->next = $previousElement->next;

        $previousElement->next->prev = $element;
        $previousElement->next = $element;

        $this->length++;

        return $element;
    }

    /**
     * @inheritDoc
     */
    public function removeByValue(string $value, bool $prevElement = false): Element
    {
        /** @var Element $currentHead */
        $currentHead = $this->head;

        if ($currentHead->value === $value) {
            $this->head = $currentHead->next;
            $currentHead->prev = null;
            return $prevElement ? $this->head->prev : $this->head->next;
        }

        $previousElement = null;
        while ($currentHead->value !== $value) {
            $previousElement = $currentHead;
            $currentHead = $currentHead->next;
        }

        $previousElement->next = $currentHead->next;
        $currentHead->next->prev = $previousElement;

        $this->length--;

        return $prevElement ? $previousElement : $currentHead->next;
    }

    /**
     * @inheritDoc
     */
    public function removeByIndex(int $index, bool $prevElement = false): Element
    {
        /** @var Element $currentHead */
        $currentHead = $this->head;

        if ($index === 0) {
            $this->head = $currentHead->next;
            $currentHead->prev = null;
            return $prevElement ? $this->head->prev : $this->head->next;
        }

        $previousElement = null;
        $count = 0;
        while ($count < $index) {
            $count++;
            $previousElement = $currentHead;
            $currentHead = $currentHead->next;
        }

        $previousElement->next = $currentHead->next;
        $currentHead->next->prev = $previousElement;

        $this->length--;

        return $prevElement ? $previousElement : $currentHead->next;
    }

    /**
     * @inheritDoc
     */
    public function indexOf(string $value): ?int
    {
        /** @var Element $currentHead */
        $currentHead = $this->head;

        if ($currentHead->value === $value) {
            return 0;
        }

        $index = -1;
        while ($currentHead) {
            $index++;
            if ($currentHead->value === $value) {
                return $index;
            }
            $currentHead = $currentHead->next;
        }

        return $index;
    }

    /**
     * @inheritDoc
     */
    public function getByValue(string $value): ?Element
    {
        $currentElement = $this->head;

        while ($currentElement->value !== $value) {
            $currentElement = $currentElement->next;
        }

        return $currentElement;
    }

    /**
     * @inheritDoc
     */
    public function getByIndex(int $index): ?Element
    {
        $count = 0;
        $currentElement = $this->head;

        while ($count < $index) {
            $count++;
            $currentElement = $currentElement->next;
        }

        return $currentElement;
    }


    /**
     * @inheritDoc
     */
    public function getSize(): int
    {
        return $this->length;
    }

    /**
     * @inheritDoc
     */
    public function getHead(): ?Element
    {
        return $this->head;
    }


    /**
     * @inheritDoc
     */
    public function isEmpty(): bool
    {
        return $this->length === 0;
    }
}

