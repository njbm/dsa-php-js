

/**
 * Stack implementation using class
 */
class Stack {
    constructor() {
        this.stack = [];
    }

    push(value) {
        this.stack.push(value);
    }

    pop() {
        return this.stack.pop();
    }

    peek() {
        return this.stack[this.stack.length - 1];
    }

    isEmpty() {
        return this.stack.length === 0;
    }
}

// Example usage
const s = new Stack();
s.push(1);
s.push(2);
console.log(s.pop()); // Output: 2
