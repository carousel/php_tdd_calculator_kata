<?php
    require("Calculator.php");

    class CalculatorTest extends PHPUnit_Framework_TestCase {

        protected $calc;
        public function setUp()
        {
            $this->calc = new Calculator;
        }

        /**  @test */
        public function check_if_it_is_instance_of()
        {
            $this->assertInstanceOf("Calculator",$this->calc);
        }
        /**  @test */
        public function check_type()
        {
            $this->assertInternalType("integer",$this->calc->getResult());
        }
        
        /**  @test */
        public function get_result()
        {
            $this->assertEquals(0,$this->calc->getResult());
        }

        /**  @test */
        public function add()
        {
            $this->calc->add(5);
            $this->assertEquals(5,$this->calc->getResult());
            $this->calc->reset();

            $this->calc->add(10,20);
            $this->assertEquals(30,$this->calc->getResult());

            $this->calc->reset();
            $this->calc->add(10,20,30);
            $this->assertEquals(60,$this->calc->getResult());
        }
        /**  @test */
        public function subtract()
        {
            $this->calc->reset();
            $this->calc->subtract(10);
            $this->assertEquals(-10,$this->calc->getResult());

        }
        /**  @test */
        public function divide()
        {
            $this->calc->reset();
            $this->calc->divide(20,2);
            $this->assertEquals(10,$this->calc->getResult());
        }

        /**  @test */
        public function multiply()
        {
            $this->calc->reset();
            $this->calc->multiply(10,10);
            $this->assertEquals(100,$this->calc->getResult());
            
        }
        
    }
