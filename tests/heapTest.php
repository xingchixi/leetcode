<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include_once "heap.php";        

final class heapTest extends TestCase
{

    public function testheap(): void
    {
        $h = new Heap();
        $h->add(9);
        $h->add(7);
        $h->add(13);
        $h->add(9);
        $h->add(5);
        $h->add(6);
        $h->add(11);
        $h->add(2);
        $h->add(4);
        $h->add(8);

        //echo $h->getStr();
        $this->assertEquals($h->getRoot(), 2);

        $h->remove();
        echo $h->getStr();
        $this->assertEquals($h->getRoot(), 4);

        $h->remove();
        $this->assertEquals($h->getRoot(), 5);
        $h->remove();
        $this->assertEquals($h->getRoot(), 6);
        $h->remove();
        $this->assertEquals($h->getRoot(), 7);
        $h->remove();
        $this->assertEquals($h->getRoot(), 8);

    }
}