<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    /** @test */
    public function it_gets_a_greeting()
    {
        $greeter = new \App\Services\Greeter();
        $result = $greeter->getGreeting();
        $expected = 'hello';
        $this->assertEquals($expected, $result);
    }
}
