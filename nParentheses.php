<?php
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



