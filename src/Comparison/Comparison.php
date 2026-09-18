<?php

namespace Mili\RulePilot\Comparison;

use Mili\RulePilot\Comparison\Operators\Equal;
use Mili\RulePilot\Comparison\Operators\GreaterThan;
use Mili\RulePilot\Comparison\Operators\LessThan;
use Mili\RulePilot\Comparison\Operators\NotEqual;
use Mili\RulePilot\Facade\Registry;

class Comparison
{
    public function compare(mixed $decision, mixed $condition)
    {
        return app($this->findOperator($decision->getOperator()))
            ->campare($decision->getValue(),$condition->getValue());
     }
    private function findOperator(string $operator)
    {
        return match($operator){
            '=' => Equal::class,
            '>' => GreaterThan::class,
            '<' => LessThan::class,
            '!=' => NotEqual::class
        };
    }
}
