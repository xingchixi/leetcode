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
