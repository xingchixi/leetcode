<?php

function nParentheses($n){
	$results = [];
	if($n==1){
		$results[] = '()';
	}
	else{
		$results_n_minus_one = nParentheses($n - 1);
		foreach($results_n_minus_one as $r){
			$results[] = '()' . $r;
			$results[] = '(' . $r . ')';
			//$results[] =  $r . '()';
		}

	}
	return $results;



}

$res = nParentheses(3);
var_dump($res);