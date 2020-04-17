<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include_once 'ListNode.php';  
include_once 'mergeSortedLists.php';        

final class mergeSortedListsTest extends TestCase
{

    public function testMerge(): void
    {
        $lists = [];
        $lists[] = generateList([1, 4, 7]);
        $lists[] = generateList([2, 5, 8, 8, 11]);
        $lists[] = generateList([3, 6, 9, 12]);

        $merged = mergeLists($lists);
        $this->assertEquals(json_encode($merged->getListValues()), json_encode([1, 2, 3, 4, 5, 6, 7, 8, 8, 9, 11, 12]));

    }
}