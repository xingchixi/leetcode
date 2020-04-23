<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include_once 'longestParentheses.php';        

final class longestParenthesesTest extends TestCase
{

    public function testLongestParentheses(): void
    {


        $longest = longestParentheses('(()');
        $this->assertEquals($longest, "()");

        $longest = longestParentheses(')()())');
        $this->assertEquals($longest, "()()");

        $longest = longestParentheses('()(()))(()()(())))))()()');
        $this->assertEquals($longest, "(()()(()))");

    }
}