<?php
declare(strict_types=1);

namespace Src\Replacers;

interface Replaceable
{
    public function canReplace(Int $number): Bool;
    public function replace(): String;
}
