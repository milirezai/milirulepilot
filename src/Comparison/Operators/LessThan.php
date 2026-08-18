<?php

namespace Milirulepilot\Comparison\Operators;

class LessThan extends Operator
{
    public function campare(mixed $condition, mixed $decision)
    {
        return $condition < $decision;
    }
}
