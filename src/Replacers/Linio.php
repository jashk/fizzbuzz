<?php
declare(strict_types=1);

namespace Src\Replacers;

class Linio implements Replaceable
{
    public function canReplace($number): Bool
    {
        return ($number % 3 === 0);
    }

    public function replace(): String
    {
        return 'Linio';
    }
}
