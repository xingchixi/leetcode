<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include_once 'nParentheses.php';        

final class nParenthesesTest extends TestCase
{

    public function testGenerateParentheses(): void
    {
        $res = nParentheses(3);

        $this->assertEquals(count($res), 5);
        $this->assertContains("()()()", $res);
        $this->assertContains("(()())", $res);
        $this->assertContains("()(())", $res);
        $this->assertContains("((()))", $res);
        $this->assertContains("(())()", $res);

    }
}