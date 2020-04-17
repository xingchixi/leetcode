<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include_once 'ListNode.php';  
include_once 'reverseKGroup.php';        

final class reverseKGroupTest extends TestCase
{

    public function testReverse(): void
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $list = generateList($array);
        $reversed = reverseKGroup($list, 4);
        $this->assertEquals(json_encode($reversed->getListValues()), json_encode([4, 3, 2, 1, 8, 7, 6, 5,  9, 10]));

        $array = [1, 2];
        $list = generateList($array);
        $reversed = reverseKGroup($list, 3);
        $this->assertEquals(json_encode($reversed->getListValues()), json_encode([1, 2]));

        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $list = generateList($array);
        $reversed = reverseKGroup($list, 3);
        $this->assertEquals(json_encode($reversed->getListValues()), json_encode([3, 2, 1, 6, 5, 4, 9, 8, 7]));
        

    }
}