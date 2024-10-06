<?php

namespace Stack;

class Stack
{
    private array $stack;
    private int $size;

    public function __construct()
    {
        $this->stack = [];
        $this->size = 0;
    }

    /**
     * @throws \Exception
     */
    public function push($data)
    {
        $this->stack[$this->size] = $data;
        $this->size++;
    }

    /**
     * @throws \Exception
     */
    public function pop()
    {
        if($this->isEmpty())
            throw new \Exception('Stack is empty');

        $this->size--;
        array_pop($this->stack);
    }

    public function peek()
    {
        if($this->isEmpty())
            throw new \Exception('Stack is empty');

        return $this->stack[$this->size - 1];
    }

    public function isEmpty(): bool
    {
        return $this->size === 0;
    }

}