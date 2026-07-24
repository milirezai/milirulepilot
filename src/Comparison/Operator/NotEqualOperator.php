<?php

namespace MiliRulePilot\Comparison\Operator;

class NotEqualOperator extends OperatorBase
{
    public function campare(mixed $condition, mixed $decision)
    {
        return $condition != $decision;
    }
}
