<?php
declare(strict_types=1);

namespace Src\Replacers;

class Linianos implements Replaceable
{
    public function canReplace($number): Bool
    {
        return ($number % 15 === 0);
    }

    public function replace(): String
    {
        return 'Linianos';
    }
}
