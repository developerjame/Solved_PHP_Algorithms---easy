<?php
class Stack{
    private $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    function push($element){
        return array_push($this->stack, $element);
    }
    function pop(){
        if($this->isEmpty()){
            return null;
        }else{
            return array_pop($this->stack);
        }
    }
    function isEmpty(){
        return empty($this->stack);
    }
}
$stack = new Stack();
$stack->push(5);
$stack->push(8);
$stack->push(2);

echo "Popped element: ".$stack->pop()."<br>";
echo "Is array empty? ".($stack->isEmpty() ? "Yes":"No");
?>