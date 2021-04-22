<?php
namespace CodeExperts\Aritimetico;

use PHPUnit\Framework\TestCase;
use CodeExperts\Aritimetico\Subtracao;

class SubtracaoTest extends TestCase {

    public function assertPreConditions():void
    {
        $this->assertTrue(
            class_exists('CodeExperts\Aritimetico\Subtracao')
        );
    }

    public function testeSubtracaoDoisNumeros()
    {
        $soma = new Subtracao();
        $soma-> setNum1(15);
        $soma-> setNum2(10);

        $this->assertEquals(5,$soma->subtrair());

        $soma = new Subtracao();
        $soma-> setNum1(40);
        $soma-> setNum2(10);

        $this->assertEquals(30,$soma->subtrair());

    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedException Parametro nao Informado
     */
    public function testValidaSeValoresNaoForemPassados()
    {
        $soma = new Subtracao();
        $soma-> setNum1(40);
        $soma-> setNum2(10);
    }
}