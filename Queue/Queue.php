<?php

namespace Queue;

class Queue
{

    private array $queue;
    private int $size;

    public function __construct()
    {
        $this->queue = [];
        $this->size = 0;
    }

    public function enqueue($data)
    {
        $this->queue[$this->size] = $data;
        $this->size++;
    }

    public function dequeue()
    {
        if($this->isEmpty())
            throw new \Exception('Queue is empty');

        $this->size--;
        array_shift($this->queue);
    }

    public function peek()
    {
        if($this->isEmpty())
            throw new \Exception('Queue is empty');

        return $this->queue[0];
    }

    public function isEmpty(): bool
    {
        return $this->size === 0;
    }

    public function size(): int
    {
        return $this->size;
    }

    public function display()
    {
        foreach($this->queue as $item) {
            echo $item . ' -> ';
        }
    }

}