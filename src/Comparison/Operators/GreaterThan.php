<?php

namespace Milirulepilot\Comparison\Operators;

class GreaterThan extends Operator
{
    public function campare(mixed $valueInDecision, mixed $valueInCondition)
    {
        return $valueInCondition > $valueInDecision;
    }
}
