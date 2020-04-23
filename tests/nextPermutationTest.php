<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include_once 'nextPermutation.php';        

final class nextPermutationTest extends TestCase
{

    public function testNextPermutation(): void
    {
        
        $array = [1, 2, 3];
        $next = nextPermutation($array);
        $this->assertEquals(json_encode($next), json_encode([1, 3, 2]));

        $array = [3, 2, 1];
        $next = nextPermutation($array);
        $this->assertEquals(json_encode($next), json_encode([1, 2, 3]));

        $array = [1, 1, 5];
        $next = nextPermutation($array);
        $this->assertEquals(json_encode($next), json_encode([1, 5, 1]));
        
        $array = [1,2,10,5,3,1];
        $next = nextPermutation($array);
        $this->assertEquals(json_encode($next), json_encode([1,3,1,2,5,10]));

        $array = [7, 9, 4, 2, 6, 1];
        $next = nextPermutation($array);
        $this->assertEquals(json_encode($next), json_encode([7, 9, 4, 6, 1, 2]));


    }

    public function test2(): void
    {
        $a = 1;
        $this->assertEquals(1, $a);

    }

    public function test23(): void
    {
        $a = true;
        $this->assertTrue($a);

    }
}