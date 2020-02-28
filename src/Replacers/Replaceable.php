<?php
declare(strict_types=1);

namespace Src\Replacers;

interface Replaceable
{
    public static function canReplace(Int $number): Bool;
    public static function replace(): String;
}
