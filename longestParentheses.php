<?php

function longestParentheses($s){
    $lefts = [];
    $rights = [];
    $longest = '';
    for($i=0; $i<strlen($s); $i++){
        $c = $s[$i];
        if($c=='('){
            $lefts[] = $i;
        }
        else{
            $rights[] = $i;
            if(count($lefts)>=count($rights)){                                
                $start = $lefts[count($lefts)-count($rights)];                
                $curlongest = str_repeat("(", $i-$start+1);
                foreach($rights as $r){
                    $curlongest[$r-$start] = ")";
                }
                
                //echo "\n------start: $start i:$i \n";
                //var_dump($lefts);
                //var_dump($rights);
                //var_dump($curlongest);

                if(strlen($curlongest)>strlen($longest)){
                    $longest = $curlongest;
                }
            }
            else{
                $lefts=[];
                $rights=[];
            }
        }
    }
    return $longest;
}