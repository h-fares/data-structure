<?php

class Node
{
    public $data;
    public Node $left;
    public Node $right;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}