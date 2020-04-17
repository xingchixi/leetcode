<?php

require_once('./ListNode.php');


function reverseKGroup($list, $k)
{
	if ($list === null || $k <= 1){
		return $list;
	}	
	$firstNode = null;
	$currentNode = $list;
	$previousLast = null;
	while (true){
		$nodes = [];
		for ($i = 0; $i < $k; $i++){
			if ($currentNode !== null){
				$nodes[] = $currentNode;
				$currentNode = $currentNode->next;
			}
		}
		if (count($nodes) == $k){
			if($firstNode === null){
				$firstNode = $nodes[$k-1];
			}
			$nodes[0]->next = $nodes[$k-1]->next;
			for ($i = 1; $i < $k; $i++){
				$nodes[$i]->next = $nodes[$i-1];
			}
			if ($previousLast !== null){
				$previousLast->next = $nodes[$k-1];
			}
			$previousLast = $nodes[0];
			$currentNode = $nodes[0]->next;
		}
		else{
			if ($firstNode === null){
				$firstNode = $nodes[0];
			}
			return $firstNode;
		}
	}
	return $firstNode;	
}









/*
function reverseKGroup($list, $k){
	if($list===null || $k <=1){
		return $list;
	}

	
	$firstNode = null;
	$currentNode = $list;
	$previousLast = null;

	$count = 0;
	while (true){
		$nodes = [];
		for ($i=0; $i<$k; $i++){
			if ($currentNode !== null){
				$nodes[] = $currentNode;
				//if ($currentNode->next !== null){
					$currentNode = $currentNode->next;
				//}
				//else{
				//	break;
				//}
			}
			//else{
			//	break;
			//}

		}

		for($i=0; $i<count($nodes); $i++){
			echo "node:". $nodes[$i]->val . " ";
		}
		echo "\n";



		
		if(count($nodes)==$k){
			if($firstNode===null){
				$firstNode = $nodes[$k-1];
			}
			$groupNext = $nodes[$k-1]->next;

			for($i=1; $i<$k; $i++){
				$nodes[$i]->next = $nodes[$i-1];
			}

			$nodes[0]->next = $groupNext;
			echo "reversed: " . getStrForList($nodes[$k-1]). "\n";


			if($previousLast!==null){
				echo "previous last " . $previousLast->val . "\n";
				$previousLast->next = $nodes[$k-1];
				echo "previous last " . $previousLast->val . " > " .$nodes[$k-1]->val ."\n";
			}
			else{
				echo "no previousLast \n";
			}
			
			$previousLast = $nodes[0];
			$currentNode = $groupNext;
		}
		else{
			if($firstNode===null){
				$firstNode = $nodes[0];
			}
			return $firstNode;
		}


		
		$count++;
		echo "\n";

	}

	return $firstNode;
	

}

function reverseKGroup2($head, $k) {
	$dummy=new ListNode(-1);
    $pre=$cur=$dummy;
    $dummy->next=$head;
    $num=0;
    while($cur=$cur->next) ++$num;
    while($num>=$k){
        $cur=$pre->next;  
        for($i=1;$i<$k;++$i){
            $t=$cur->next; 
            $cur->next=$t->next; 
            $t->next=$pre->next; 
            $pre->next=$t;
        }
        $pre=$cur;
        $num -=$k;
    }
    return $dummy->next;
    
}

*/