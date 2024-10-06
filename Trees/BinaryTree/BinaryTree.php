<?php

class BinaryTree
{

    public Node $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function insert($data)
    {
        $newNode = new Node($data);

        if($this->root === null) {
            $this->root = $newNode;
        } else {
            $this->insertRecursively($this->root, $newNode);
        }
    }

    private function insertRecursively(Node $currentNode, Node $newNode)
    {
        if($newNode->data < $currentNode->data) {
            if($currentNode->left === null) {
                $currentNode->left = $newNode;
            } else {
                $this->insertRecursively($currentNode->left, $newNode);
            }
        } else {
            if ($currentNode->right === null) {
                $currentNode->right = $newNode;
            } else {
                $this->insertRecursively($currentNode->right, $newNode);
            }
        }
    }

    // In-order Traversal (Left, Root, Right)
    public function inOrderTraversal(Node $node)
    {
        if($node === null) {
            return;
        }

        $this->inOrderTraversal($node->left);
        echo $node->data . ' ';
        $this->inOrderTraversal($node->right);
    }

    // Pre-order Traversal (Root, Left, Right)
    public function preOrderTraversal(Node $node)
    {
        if($node === null) {
            return;
        }

        echo $node->data . ' ';
        $this->preOrderTraversal($node->left);
        $this->preOrderTraversal($node->right);
    }

    // Post-order Traversal (Left, Right, Root)
    public function postOrderTraversal(Node $node)
    {
        if($node === null) {
            return;
        }

        $this->postOrderTraversal($node->left);
        $this->postOrderTraversal($node->right);
        echo $node->data . ' ';
    }
}