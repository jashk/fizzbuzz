<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    public function testCantTranslateWhenNotApplicableRule(): void
    {
        $stm = new FizzBuzz;
        $this->assertEquals(1, $stm->translate(1));
    }

    public function testCanFizz(): void
    {
        $stm = new FizzBuzz;
        $this->assertEquals('Linio', $stm->translate(3));
    }

    public function testCanBuzz(): void
    {
        $stm = new FizzBuzz;
        $this->assertEquals('IT', $stm->translate(5));
    }

    public function testCanFizzBuzz(): void
    {
        $stm = new FizzBuzz;
        $this->assertEquals('Linianos', $stm->translate(15));
    }
    public function testCanTranslateNumbersFrom1To100(): void
    {
        $stm = new FizzBuzz;
        $this->expectOutputString('12Linio4ITLinio78LinioIT11Linio1314Linianos1617Linio19ITLinio2223LinioIT26Linio2829Linianos3132Linio34ITLinio3738LinioIT41Linio4344Linianos4647Linio49ITLinio5253LinioIT56Linio5859Linianos6162Linio64ITLinio6768LinioIT71Linio7374Linianos7677Linio79ITLinio8283LinioIT86Linio8889Linianos9192Linio94ITLinio9798LinioIT');
        $stm->run(1, 100);
    }
}