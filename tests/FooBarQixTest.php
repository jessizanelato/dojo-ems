<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FooBarQixTest extends TestCase {

    public function testRetornaFooFooPara3 (){
    	$this->assertEquals("FooFoo", FooBarQix::compute(3));
    }

    public function testRetorna4Para4 (){
    	$this->assertEquals("4", FooBarQix::compute(4));
    }

    public function testRetornaBarBarPara5 (){
    	$this->assertEquals("BarBar", FooBarQix::compute(5));
    }

    public function testRetornaBarPara6 (){
    	$this->assertEquals("Foo", FooBarQix::compute(6));
    }
    
    public function testRetornaQixQixPara7 (){
    	$this->assertEquals("QixQix", FooBarQix::compute(7));
    }

    public function testRetorna8Para8 (){
    	$this->assertEquals("8", FooBarQix::compute(8));
    }

    public function testRetornaFooPara13 (){
    	$this->assertEquals("Foo", FooBarQix::compute(13));
    }

    public function testRetornaQixPara14 (){
    	$this->assertEquals("Qix", FooBarQix::compute(14));
    }

    public function testRetornaFooBarBarPara15 (){
    	$this->assertEquals("FooBarBar", FooBarQix::compute(15));
    }

    public function testRetornaFooFooFooPara33 (){
    	$this->assertEquals("FooFooFoo", FooBarQix::compute(33));
    }

    public function testRetornaFooBarPara51 (){
    	$this->assertEquals("FooBar", FooBarQix::compute(51));
    }

    public function testRetornaBarFooPara53 (){
    	$this->assertEquals("BarFoo", FooBarQix::compute(53));
    }

    public function testRetornaQixPara127 (){
    	$this->assertEquals("Qix", FooBarQix::compute(127));
    }

    public function testRetornaXPara101 (){
    	$this->assertEquals("*", FooBarQix::compute(101));
    }

    public function testRetornaFooBarQixXBarPara105 (){
    	$this->assertEquals("FooBarQix*Bar", FooBarQix::compute(105));
    }

    public function testRetornaFooFooXFooPara303 (){
    	$this->assertEquals("FooFoo*Foo", FooBarQix::compute(303));
    }

    public function testRetornaFooQixXXPara10101 (){
    	$this->assertEquals("FooQix**", FooBarQix::compute(10101));
    }
    
}