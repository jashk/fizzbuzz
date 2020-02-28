<?php
declare(strict_types=1);

namespace Tests\Repleacers;

use PHPUnit\Framework\TestCase;
use Src\Replacers\Linio;

final class LinioTest extends TestCase
{
    /**
     * @dataProvider canReplaceableProvider
     */
    public function testCanReplaceable($number, $expected): void
    {
        $linio = new Linio();
        $this->assertEquals($expected, $linio->canReplace($number));
    }

    public function canReplaceableProvider(): array
    {
        return [
            [1, false],
            [2, false],
            [3, true],
            [99, true],
            [100, false]
        ];
    }

    public function testCanGetReplaceString(): void
    {
        $linio = new Linio();
        $this->assertEquals('Linio', $linio->replace());
    }
}
