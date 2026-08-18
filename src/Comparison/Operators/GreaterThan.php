<?php

namespace Milirulepilot\Comparison\Operators;

class GreaterThan extends Operator
{
    public function campare(mixed $decision, mixed $condition)
    {
        return $condition > $decision;
    }
}
