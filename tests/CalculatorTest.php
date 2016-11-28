<?php
namespace skeleton\test;

use skeleton\Calculator as Calculator;

require_once 'src/Calculator.php';

class CalculatorTests extends \PHPUnit_Framework_TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    
    public function addDataProvider() {
        return array(
            array(1,2,3),
            array(0,0,2),
            array(-1,-1,-2),
        );
    }
    
    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->calculator->add($a, $b);
        $this->assertEquals($expected, $result);
    }
    
    /**
     * test double
     */
    
    public function testWithStub()
    {
        // Create a stub for the Calculator class.
        $calculator = $this->getMockBuilder('Calculator')
        ->getMock();
    
        // Configure the stub.
        $calculator->expects($this->any())
        ->method('add')
        ->will($this->returnValue(6));
    
        $this->assertEquals(6, $calculator->add(100,100));
    }
}