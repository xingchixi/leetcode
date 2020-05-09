<?php
function firstLastInSorted($sorted, $n){
    
    return $s;
}


function _findSmaller($sorted, $start, $end, $n){
    if($sorted[$start]>$n){            // =
        return -1;
    }
    else if($sorted[$end]<$n){
        return -1;
    }
    else{
        $c = $end - $start +1;
        if($c > 3){
            $mid = floor(($start+$end)/2); 
            if($sorted[$mid]>=$n){
                //echo "\n $start, $end, $mid aaa\n";
                return _findSmaller($sorted, $start, $mid, $n);
            }
            else{
                //echo "\n $start, $end, bbbb\n";
                return _findSmaller($sorted, $mid, $end, $n);
            }
        }
        else{
           //echo "\n $start, $end, cccc\n";
           for($i=$start; $i<=$end; $i++){
                if($sorted[$i]<$n && $i+1<=$end && $sorted[$i+1]==$n ){
                    return $i+1;
                }
           } 
           return -1;
        }
    }

}



function _findBigger($sorted, $start, $end, $n){
    if($sorted[$start]>$n){
        //echo "\n----$start, $end, x \n";
        return -1;
    }
    else if($sorted[$end]<$n){
        //echo "\n---$start, $end, y \n";
        return -1;
    }
    else{
        $c = $end - $start +1;
        if($c > 3){
            $mid = floor(($start+$end)/2); 
            if($sorted[$mid]<=$n){
                //echo "\n---$start, $end, a \n";
                return _findBigger($sorted, $mid, $end, $n);
            }
            else{
                //echo "\n---$start, $end, b \n";
                return _findBigger($sorted, $start, $mid, $n);
            }
        }
        else{
           for($i=$end; $i>=$start; $i--){
                if($sorted[$i]>$n && $i-1>=$start && $sorted[$i-1]==$n ){
                    //echo "\n---$start, $end, $i c \n";
                    return $i-1;
                    break;
                }
           } 
           return -1;
        }
    }

}
