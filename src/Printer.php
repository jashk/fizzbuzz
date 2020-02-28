<?php
declare(strict_types=1);

namespace Src;

class Printer
{
    private $replacers = [];

    public function __construct(array $replacers = [])
    {
        $this->replacers = $replacers;
    }

    public function replace(Int $number): String
    {
        foreach ($this->replacers as $replacer) {
            if ($replacer->canReplace($number)) {
                return $replacer->replace($number);
            }
        }

        return (String)$number;
    }

    public function print(Int $to = 100, Int $from = 1, String $separator = ','): Void
    {

        $replacedResult = $this->replaceRange(range($from, $to));
        print implode($separator, $replacedResult);
    }

    public function replaceRange(array $range): array
    {
        return array_map(
            function (Int $number) {
                return $this->replace($number);
            },
            $range
        );
    }
}
