<?php

namespace Tests;

class Itens implements \Countable, \Iterator
{
    private array $itens = [];
    private int $position = 0;

    public function add(Item $item)
    {
        $this->itens[] = $item;
    }

    public function current()
    {
        return $this->itens[$this->position];
    }

    public function next(): int
    {
        return ++$this->position;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return  isset($this->itens[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function count(): int
    {
        return count($this->itens);
    }
}
