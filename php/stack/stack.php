

<?php
class Stack {
    private array $stack = [];

    public function push($value): void {
        $this->stack[] = $value;
    }

    public function pop() {
        return array_pop($this->stack);
    }

    public function peek() {
        return end($this->stack);
    }

    public function isEmpty(): bool {
        return empty($this->stack);
    }
}

// Example usage
$s = new Stack();
$s->push(1);
$s->push(2);
echo $s->pop(); // Output: 2
