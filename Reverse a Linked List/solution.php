<?php
class ListNode {
    public $val;
    public $next;

    public function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class LinkedList {
    public $head;

    public function __construct() {
        $this->head = null;
    }

    // Function to insert a new node at the beginning of the linked list
    public function insertAtBeginning($val) {
        $newNode = new ListNode($val);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    // Function to reverse the linked list
    public function reverse() {
        $prev = null;
        $current = $this->head;
        $next = null;

        while ($current != null) {
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next;
        }

        $this->head = $prev;
    }

    // Function to print the linked list
    public function printList() {
        $temp = $this->head;
        while ($temp != null) {
            echo $temp->val . " ";
            $temp = $temp->next;
        }
        echo "\n";
    }
}

// Example usage:
$linkedList = new LinkedList();
$linkedList->insertAtBeginning(3);
$linkedList->insertAtBeginning(2);
$linkedList->insertAtBeginning(1);

echo "Original linked list: ";
$linkedList->printList(); // Outputs: 1 2 3

$linkedList->reverse();

echo "Reversed linked list: ";
$linkedList->printList(); // Outputs: 3 2 1

?>