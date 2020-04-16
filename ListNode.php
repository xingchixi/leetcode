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


function generateList($valuesArray){
	if(count($valuesArray)==0){
		return null;
	}

	$nodes = [];
	for ($i=0; $i<count($valuesArray); $i++){
		$nodes[] = new ListNode($valuesArray[$i]);
	}

	for($i=0; $i<count($valuesArray)-1; $i++){
		$nodes[$i]->next = $nodes[$i+1];
	}

	return $nodes[0];
}

function getStrForList($list){
	return $list===null?'null':$list->getListStr();
}

/*
$n1 = new ListNode(101);
$n2 = new ListNode(102);
$n3 = new ListNode(103);

$n1->next = $n2;
$n2->next = $n3;

var_dump($n1->getListStr());
*/

