<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Src\Replacers\Linianos;

final class LinianosTest extends TestCase
{
    /**
     * @dataProvider canReplaceableProvider
     */
    public function testCanReplaceable($number, $expected): void
    {
        $linianos = new Linianos();
        $this->assertEquals($expected, $linianos->canReplace($number));
    }

    public function canReplaceableProvider(): array
    {
        return [
            [1, false],
            [2, false],
            [3, false],
            [15, true],
            [30, true],
            [60, true],
            [100, false]
        ];
    }

    public function testCanGetReplaceString(): void
    {
        $linianos = new Linianos();
        $this->assertEquals('Linianos', $linianos->replace());
    }
}