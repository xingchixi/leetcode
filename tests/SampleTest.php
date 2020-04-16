<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include_once 'nParentheses.php';                //relative to current running directory (where we have phpunit)

//https://phpunit.de/getting-started/phpunit-9.html
// assert functions: https://phpunit.de/manual/6.5/en/appendixes.assertions.html#appendixes.assertions.assertContains
/*
set up:
at root directory create tests directory.  put SampleTest.php in tests
at root directory:
wget -O phpunit https://phar.phpunit.de/phpunit-9.phar
chmod +x phpunit
./phpunit --version                      // test if it works

actual test: 
./phpunit  ./tests                       // test all testCases in tests directory
./phpunit tests/nParenthesesTest.php     // run only one testCase
*/

final class SampleTest extends TestCase
{
    public function testCanBeUsedAsString(): void
    {
        $a = 1;
        $this->assertEquals(1, $a);
    }
}