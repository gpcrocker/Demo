<?php
/**
* @coversDefaultClass \Gpcrocker88\Demo\Hello
*/
class HelloTest extends \PHPUnit_Framework_TestCase
{
    protected $hello;
    
    public function setUp()
    {
        $this->hello = new \Gpcrocker88\Demo\Hello();
    }
    
    /**
    * @covers ::world
    */
    public function testWorld()
    {
    //    $this->setUp();
        $this->assertSame('World', $this->hello->world());
    }
}