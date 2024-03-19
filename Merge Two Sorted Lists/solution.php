<?php
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}
class Solution {

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $dummy = new ListNode();
        $current = $dummy;

        // Create a dummy node to serve as the head of the merged list
    $dummy = new ListNode();
    $current = $dummy;
    
    // Traverse both lists simultaneously
    while ($list1 !== null && $list2 !== null) {
        // Compare the values of the current nodes
        if ($list1->val <= $list2->val) {
            $current->next = $list1; // Connect current node to list1
            $list1 = $list1->next;   // Move list1 pointer forward
        } else {
            $current->next = $list2; // Connect current node to list2
            $list2 = $list2->next;   // Move list2 pointer forward
        }
        $current = $current->next; // Move the current pointer forward
    }
    
    // Connect the remaining nodes of the non-empty list
    if ($list1 !== null) {
        $current->next = $list1;
    } elseif ($list2 !== null) {
        $current->next = $list2;
    }
    
    // Return the head of the merged list (skipping the dummy node)
    return $dummy->next;
    }
}
$list1 = new ListNode(1, new ListNode(3, new ListNode(4)));
$list2 = new ListNode(2, new ListNode(3, new ListNode(5)));

$solution = new Solution();
$result = $solution->mergeTwoLists($list1, $list2);

while($result !== null){
    echo $result->val." ";
    $result = $result->next;
}
?>