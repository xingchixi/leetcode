<?php

class ListNode 
{
    public $val = 0;
    public $next = null;

    function __construct($val) 
    { 
    	$this->val = $val; 
    }

    function getListValues()
    {
    	$values = [];

    	$currentNode = $this;
    	$i = 0;
    	while (true){

    		$values[] = $currentNode->val;
    		if ($currentNode->next === null){
    			break;
    		}
    		else {
    			$currentNode = $currentNode->next;
    		}
    		$i++;

    		//safe guard;
    		if ($i > 1000){
    			break;			
    		}

    	}

    	return $values;
    }


    function getListStr()
    {
    	$values = $this->getListValues();
    	return implode(' > ', $values);
    }

}

/*
$n1 = new ListNode(101);
$n2 = new ListNode(102);
$n3 = new ListNode(103);

$n1->next = $n2;
$n2->next = $n3;

var_dump($n1->getListStr());
*/

