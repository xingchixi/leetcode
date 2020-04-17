<?php

require_once('./ListNode.php');

function getStrForLists($lists){
	$str = '';
	foreach ($lists as $n){
		if($n!==null){
			$str .= ($n->getListStr() . "\n");
		}
		else{
			$str .= "null" . "\n";
		}
	}
	return $str;
}

function mergeLists($lists){
	$startNode = null;
	$previousNode = null;

	$count = 0;
	while (true){
		$allNull = true;
		$smallestNodeIndex = null;
		for ($i = 0; $i < count($lists); $i++ ){
			if($lists[$i] !== null){
				$allNull = false;

				if($smallestNodeIndex === null){
					$smallestNodeIndex = $i;
				}
				else{
					if($lists[$i]->val < $lists[$smallestNodeIndex]->val){
						$smallestNodeIndex = $i;
					}
				}
			}
		}

		if ($allNull){
			break;
		}

		$currentNode = $lists[$smallestNodeIndex];

		if ($previousNode !== null){
			$previousNode->next = $currentNode;
		}

		if ($smallestNodeIndex !==null){
			$lists[$smallestNodeIndex] = $currentNode->next;
		}

		if ($count == 0){
			$startNode = $currentNode;
		}

		$previousNode = $currentNode;
		$previousNode->next = null;

		$count++;
	}
	return $startNode;
}




/*
$lists = [];

$node1 = new ListNode(1);
$node2 = new ListNode(4);
$node3 = new ListNode(7);
$node1->next = $node2;
$node2->next = $node3;
$lists[] = $node1;


$node1 = new ListNode(2);
$node2 = new ListNode(5);
$node3 = new ListNode(8);
$node4 = new ListNode(11);
$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;
$lists[] = $node1;

$node1 = new ListNode(3);
$node2 = new ListNode(6);
$node3 = new ListNode(9);
$node1->next = $node2;
$node2->next = $node3;
$lists[] = $node1;

echo "lists: \n";
echo getStrForLists($lists);

echo "sorted \n";
$sorted = mergeLists($lists);
echo ($sorted===null?'null':$sorted->getListStr()). "\n";
*/

