<?php

namespace Mili\RulePilot\Evaluator;

class Evaluator
{
    public function evaluate(array $desicion, mixed $condition)
    {
        return match ($desicion['logic']){
            'and' => $this->evaluateAnd($desicion['children'],$condition->explain()),
            'any' => $this->evaluateAny($desicion['children'],$condition->explain()),
            'not' => $this->evaluateNot($desicion['children'],$condition->explain()),
            'or' => $this->evaluateOr($desicion['children'],$condition->explain()),
        };
    }
    protected function evaluateAnd(array $desicions, array $condition): bool
    {

    }
    protected function evaluateAny(array $desicions, array $condition): bool
    {

    }
    protected function evaluateNot(array $desicions, array $condition): bool
    {

    }
    protected function evaluateOr(array $desicions, array $condition): bool
    {

    }

}
