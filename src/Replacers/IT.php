<?php
declare(strict_types=1);

namespace Src\Replacers;

class IT implements Replaceable
{
    public function canReplace($number): Bool
    {
        return ($number % 5 === 0);
    }

    public function replace(): String
    {
        return 'IT';
    }
}
