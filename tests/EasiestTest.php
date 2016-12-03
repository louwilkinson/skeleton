<?php
/*
 * phpunit experiments.
 * just making sure all works....pretty simple
 * true=true and false=false
 */

class EasiestTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }
    
    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
    
    public function testFalseIsFalse()
    {
        $foo = false;
        $this->assertFalse($foo);
    }
    
    protected function tearDown()
    {
    }
    
}