# 📘 DSA Concepts – Simple Definitions

A beginner-friendly glossary of all the core data structures and algorithms used in this repository.

---

## 🔢 Array

An array is a list of values stored in a single variable.  
Each value can be accessed using its index.

🧠 Example:  
`[10, 20, 30]` — 10 is at index `0`, 20 at `1`, 30 at `2`.

---

## 🔁 Bubble Sort

A simple sorting algorithm that compares each pair of elements and swaps them if they're in the wrong order. It keeps doing this until the array is sorted.

📌 Time Complexity: `O(n^2)`  
📌 Space Complexity: `O(1)`

🧠 Real-world analogy: Sorting a deck of cards by comparing one card at a time.

---

## 🔍 Binary Search

Used to search for an element in a **sorted array** by repeatedly dividing the search space in half.

📌 Time Complexity: `O(log n)`  
📌 Space Complexity: `O(1)`

🧠 Analogy: Looking for a word in a dictionary by opening in the middle, then narrowing down.

---

## 📚 Stack

A **Last In, First Out (LIFO)** data structure.  
You can only add (`push`) or remove (`pop`) the most recently added item.

🧠 Analogy: A stack of plates — you remove the top plate first.

---

## 🔗 Linked List

A list of nodes, where each node stores data and a reference (pointer) to the next node.

🧠 Analogy: A train where each carriage points to the next.

---

## 🧠 Time Complexity

Indicates how fast an algorithm runs depending on the input size `n`.  
Examples:
- `O(1)` – Constant time (super fast)
- `O(n)` – Linear time (grows with input)
- `O(n^2)` – Slower, nested loops

---

## 💾 Space Complexity

How much memory (RAM) an algorithm uses based on input size.

---

## 🔃 Queue

A **First In, First Out (FIFO)** data structure.  
The first element added is the first one removed.

🧠 **Analogy:** A line at a ticket counter — the person who arrives first gets served first.

### ✅ Common Operations:
- `enqueue(value)` – Add to the end
- `dequeue()` – Remove from the front

---

## 🔁 Recursion

A function that calls itself to solve smaller parts of a problem.

🧠 **Analogy:** Looking at two mirrors facing each other — the reflection repeats.

### ✅ Example Use Cases:
- Factorial
- Fibonacci
- Tree traversal
- Backtracking problems

📌 **Important:** Always have a base condition to stop recursion and avoid infinite loops.

---

## 🔀 Merge Sort

A sorting algorithm that uses **divide and conquer** to break the array into halves, sort them, then merge.

📌 Time Complexity: `O(n log n)`  
📌 Space Complexity: `O(n)`

🧠 **Analogy:** Sort small piles of cards, then combine them into one big sorted pile.

### ✅ Steps:
1. Divide array into two halves
2. Recursively sort each half
3. Merge sorted halves

---

## 🌳 Tree

A **hierarchical data structure** made of nodes.  
Each node has a value and links (edges) to child nodes.

- The **topmost** node is called the **root**
- Nodes with no children are called **leaves**

🧠 **Analogy:** Like a family tree or file directory system.

### ✅ Common Tree Types:
- Binary Tree (each node has ≤2 children)
- Binary Search Tree (BST)
- N-ary Tree
- Trie (prefix tree)

---

This file will be updated as new concepts are added to the repository.
