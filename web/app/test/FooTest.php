<?php
echo "Teemu";
namespace AppTest;

use App\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testGetName()
    {
        $foo = new Foo();
        $this->assertEquals($foo->getName(), ' TEEMUN Nginx PHP MySQL');
    }
}
