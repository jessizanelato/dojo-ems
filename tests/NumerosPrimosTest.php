<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NumerosPrimosTest extends TestCase {

    public function testRetornaArrayVazioPara1()
    {
        $this->assertEmpty(NumerosPrimos::gerar(1));
    }
    
    public function testRetornaArray2Para2(){

        $this->assertEquals([2] , NumerosPrimos::gerar(2));

    }
    public function testRetornaArray3Para3(){

        $this->assertEquals([3] , NumerosPrimos::gerar(3));

    }
    public function testRetornaArrayCom2E2Para4(){

        $this->assertEquals([2,2] , NumerosPrimos::gerar(4));

    }
    public function testRetornaArrayCom2E2E2Para8(){

        $this->assertEquals([2,2,2] , NumerosPrimos::gerar(8));

    }

    public function testRetornaArrayCom3E2Para6(){

        $this->assertEquals([2,3] , NumerosPrimos::gerar(6));

    }

    public function testRetornoArrayCom5Para5(){
        
        $this->assertEquals([5] , NumerosPrimos::gerar(5));
    
    }

    public function testRetornoArrayCom5E5Para25(){
        
        $this->assertEquals([5,5] , NumerosPrimos::gerar(25));
    
    }
    public function testRetornoArrayCom7E7Para49(){
        
        $this->assertEquals([7,7] , NumerosPrimos::gerar(49));
    
    }
    public function testRetornoArrayCom2e2e5e5Para100(){
        
        $this->assertEquals([2,2,5,5] , NumerosPrimos::gerar(100));
    
    }
    public function testRetornoArrayCom2e3E3E5Para90(){
        
        $this->assertEquals([2,3,3,5] , NumerosPrimos::gerar(90));
    
    }

}