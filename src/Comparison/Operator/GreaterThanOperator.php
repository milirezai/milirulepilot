<?php

namespace MiliRulePilot\Comparison\Operator;

class GreaterThanOperator extends OperatorBase
{
    public function campare(mixed $decision, mixed $condition)
    {
        return $condition > $decision;
    }
}
