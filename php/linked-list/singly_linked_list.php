

<?php
class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    private ?Node $head = null;

    public function append($data): void {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
            return;
        }

        $current = $this->head;
        while ($current->next !== null) {
            $current = $current->next;
        }

        $current->next = $newNode;
    }

    public function printList(): void {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }
        echo "null\n";
    }
}

// Example usage
$list = new LinkedList();
$list->append(10);
$list->append(20);
$list->append(30);
$list->printList(); // Output: 10 -> 20 -> 30 -> null
