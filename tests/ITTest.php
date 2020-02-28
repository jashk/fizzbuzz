<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Src\Replacers\It;

final class ITTest extends TestCase
{
    /**
     * @dataProvider canReplaceableProvider
     */
    public function testCanReplaceable($number, $expected): void
    {
        $it = new IT();
        $this->assertEquals($expected, $it->canReplace($number));
    }

    public function canReplaceableProvider(): array
    {
        return [
            [1, false],
            [2, false],
            [3, false],
            [5, true],
            [100, true]
        ];
    }

    public function testCanGetReplaceString(): void
    {
        $it = new IT();
        $this->assertEquals('IT', $it->replace());
    }
}