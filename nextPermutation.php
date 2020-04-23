<?php
// alg:
// find the first descending number
// find the smallest number just bigger than the descending numer
// swap smallest number with descenting number
// reverse the part before descending number

function nextPermutation($nums){
    // $nums in human format.
    // input [1,2,3] in human format.  last item (3) lest significant
    
    $machine_nums = array_reverse($nums);
    $_res = _nextPermutation($machine_nums);
    return array_reverse($_res);
}

function _nextPermutation($nums){
    // $nums in machine format
    // input[1, 2, 3],  first item(1) lest significant

    if (count($nums) <= 1){
        return $nums;
    }

    //$d is the point we see a descent in value
    $d = null;
    for($i=1; $i<count($nums); $i++){
        if($nums[$i]<$nums[$i-1]){
            $d = $i;
            break;
        }
    }

    if ($d === null){
        return array_reverse($nums);           
    }

    if ($d == 1){        
       swap($nums, 1, 0);
       return $nums;
    }
    
    $c = null;
    for ($i=0; $i<$d; $i++){
        if($nums[$i]>$nums[$d]){
            $c = $i;
            break;
        }
    }
    if ($c === null){
        die('next Permutation wrong!!');
    }

    swap($nums, $c, $d);
    $res = reverse($nums, $d - 1);
    return $nums;
}

function swap(&$nums, $i, $j){
    $t = $nums[$i];
    $nums[$i] = $nums[$j];
    $nums[$j] = $t;
}

function reverse(&$nums, $i)
{
    $start = 0;
    $end = $i;
    while ($start < $end) {
        swap($nums, $start, $end);
        $start++;
        $end--;
    }
}