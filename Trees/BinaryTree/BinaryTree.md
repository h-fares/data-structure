# Binary Tree in PHP

## Overview

A Binary Tree is a hierarchical data structure in which each node has at most two children: a left child and a right child. The nodes of the tree are organized in such a way that:

	•	The left child is always less than the parent node.
	•	The right child is always greater than the parent node.

This structure makes searching and organizing data very efficient.

Example of a Binary Tree:
```
10
/  \
5    20
/ \
3   7
```
In the above example:

	•	10 is the root of the tree.
	•	5 is the left child of 10, and 20 is the right child.
	•	3 and 7 are the children of 5.


### Operations in a Binary Tree
A Binary Tree supports various operations, such as:

	•	Insertion: Add a new node to the tree.
	•	Traversal: Visit all the nodes in a specific order.
	•	In-order Traversal: Visit the left subtree, then the root, and finally the right subtree.
	•	Pre-order Traversal: Visit the root first, then the left subtree, and finally the right subtree.
	•	Post-order Traversal: Visit the left subtree, then the right subtree, and finally the root.