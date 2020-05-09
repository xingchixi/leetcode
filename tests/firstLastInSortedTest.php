<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include_once "firstLastInSorted.php";        

final class firstLastInSortedTest extends TestCase
{

    public function testfirstLastInSorted(): void
    {

        $a = [1, 2, 3, 4, 5];
        $s = _findSmaller($a, 0, count($a)-1, 3);
        $b = _findBigger($a, 0, count($a)-1, 3); 
        $this->assertEquals($s, 2);
        $this->assertEquals($b, 2);

        $a = [2, 3, 3, 3, 3, 5];
        $s = _findSmaller($a, 0, count($a)-1, 3);
        $b = _findBigger($a, 0, count($a)-1, 3);
        $this->assertEquals($s, 1);
        $this->assertEquals($b, 4);
        

        $a = [ 5, 7, 7, 8, 8, 10];
        $s = _findSmaller($a, 0, count($a)-1, 8);
        $b = _findBigger($a, 0, count($a)-1, 8);
        $this->assertEquals($s, 3);
        $this->assertEquals($b, 4);

        $a = [ 5, 7, 7, 8, 8, 10];
        $s = _findSmaller($a, 0, count($a)-1, 6);
        $b = _findBigger($a, 0, count($a)-1, 6);
        $this->assertEquals($s, -1);
        $this->assertEquals($b, -1);
    }
}