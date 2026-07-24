<?php

namespace MiliRulePilot\Comparison\Operator;

class EqualOperator extends OperatorBase
{
    public function campare(mixed $condition, mixed $decision)
    {
        return $condition == $decision;
    }
}
