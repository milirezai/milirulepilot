<?php

namespace Milirulepilot\Comparison\Operators;

class LessThan extends Operator
{
    public function campare(mixed $valueInDecision, mixed $valueInCondition)
    {
        return $valueInCondition < $valueInDecision;
    }
}
