<?php

class LinkedList
{

    public Node $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function insert($data)
    {
        $newNode = new Node($data);

        if($this->head === null) {
            $this->head = $newNode;
        } else {
            $currentNode = $this->head;
            while($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
    }

    public function insertAtBeginning($data)
    {
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function delete($data)
    {
        if($this->head === null) {
            return false;
        } else {
            $currentNode = $this->head;
            $previousNode = null;
            while($currentNode->data !== $data) {
                if ($currentNode->next === null) {
                    return false;
                }
                $previousNode = $currentNode;
                $currentNode = $currentNode->next;
            }
            // The node is found and we want to delete it.
            $previousNode->next = $currentNode->next;

            return true;
        }
    }

    public function display()
    {
        $currentNode = $this->head;
        while($currentNode->next !== null) {
            echo $currentNode->data . ' -> ';
            $currentNode = $currentNode->next;
        }
        echo 'NULL\n';
    }
}