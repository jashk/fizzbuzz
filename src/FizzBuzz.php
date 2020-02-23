<?php
declare(strict_types=1);

final class FizzBuzz
{
    public function translate(Int $number): String
    {
        
        if ($this->divisibleBy($number, 3) && $this->divisibleBy($number, 5)) {
            return 'Linianos';
        }
        if ($this->divisibleBy($number, 3)) {
            return 'Linio';
        }
        if ($this->divisibleBy($number, 5)) {
            return 'IT';
        }
        return (string)$number;
    }
    public function run(Int $from = 1, Int $to = 100): void
    {
        for ($i = $from; $i <= $to; $i++) {
            print($this->translate($i));
        }
    }

    private function divisibleBy(Int $numerator, Int $denominator): bool
    {
        return ($numerator % $denominator) === 0;
    }
}
