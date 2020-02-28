<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Printer;
use Src\Replacers\Linio;

final class PrinterTest extends TestCase
{
    /**
     *
     * @dataProvider noReplaceNumberProvider
     */
    public function testNoReplaceNumberWhenNoApplicableReplacer($number, $expected): Void
    {
        $printer = new Printer();
        $this->assertEquals($expected, $printer->replace($number));
    }

    public function noReplaceNumberProvider()
    {
        return [
            [1, 1],
            [2, 2],
            [3, 3],
            [4, 4],
            [99, 99]
        ];
    }

    /**
     * @dataProvider replaceNumberWithLinioReplacerProvider
     */
    public function testReplaceNumberWithLinioReplacer($number, $expected): Void
    {
        $printer = new Printer([new Linio]);
        $this->assertEquals($expected, $printer->replace($number));
    }

    public function replaceNumberWithLinioReplacerProvider() : Array
    {
        return [
            [3, 'Linio'],
            [6, 'Linio'],
            [9, 'Linio']
        ];
    }

    public function testCanPrintNumbersWithoutRepleacer(): Void
    {
        $this->expectOutputString('1,2,3,4,5,6,7,8,9,10');
        $printer = new Printer();
        $printer->print(10, 1, ',');
    }

    public function testCanReplaceNumbersWhithLinioReplacer(): Void
    {
        $this->expectOutputString('1,2,Linio,4,5,Linio,7,8,Linio,10');
        $printer = new Printer([new Linio]);
        $printer->print(10, 1, ',');
    }
}
