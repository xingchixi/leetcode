<?php
function pivotSearch($values, $target){
    return _pivotSearch($values, $target, 0, count($values)-1);
}


function _pivotSearch($values, $target, $start, $end){
   echo "\n\nsearching $start, $end,   ";
    
    if($end-$start<=3){
        for($i=$start; $i<=$end; $i++){
            if($values[$i] == $target){
                return $i;
            }
            
        }
        return -1;
    }
    else{
        $mid = floor(($start + $end)/2);
        if($values[$start] < $values[$mid]){
            // start--mid is sorted            
            if( $target>=$values[$start] && $target<=$values[$mid] ){
                // target is in start--mid
                return _pivotSearch($values, $target, $start, $mid);
            }
            else{
                return _pivotSearch($values, $target, $mid+1, $end);
            }
        }
        else{
            //$mid -- $end is sorted
            if( $target>=$values[$mid] && $target<=$values[$end] ){
                // target is in mid--end
                return _pivotSearch($values, $target, $mid, $end);
            }
            else{
                return _pivotSearch($values, $target, $start, $mid-1);
            }
        }
    }
}
