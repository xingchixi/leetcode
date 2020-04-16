<?php


/* 
given n pairs of parentheses, write a function to generate all combinations of well-formed parentheses.
say n = 3:
array(5) {
  [0]=>
  string(6) "()()()"
  [1]=>
  string(6) "(()())"
  [3]=>
  string(6) "()(())"
  [4]=>
  string(6) "((()))"
  [5]=>
  string(6) "(())()"
}


*/

function nParentheses($n)
{
	$results = [];
	if ($n == 1){
		$results['()'] = '()';
	}
	else{
		$results_nMinusOne = nParentheses($n - 1);
		foreach ($results_nMinusOne as $r){
			$results[] = '()' . $r;
			$results[] = '(' . $r . ')';
			$results[] =  $r . '()';
		}

	}
	return array_unique($results);
}



