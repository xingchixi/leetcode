<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include_once "pivotSearch.php";        

final class pivotSearchTest extends TestCase
{

    public function testpivotSearch(): void
    {
        $res = pivotSearch([4,5,6,7,0,1, 2], 0);
        $this->assertEquals($res, 4);

        $res = pivotSearch([4,5,6,7,0,1, 2], 3);
        $this->assertEquals($res, -1);

        $res = pivotSearch([ 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 1, 2, 3, 4, 5, ], 14);
        $this->assertEquals($res, 8);

        $res = pivotSearch([ 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 1, 2, 3, 4, 5, ], 2);
        $this->assertEquals($res, 13);

        $res = pivotSearch([ 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 1, 2, 3, 4, 5, ], 22);
        $this->assertEquals($res, -1);

    }
}