<?php

namespace Milirulepilot\Comparison;

use Milirulepilot\Comparison\Operators\Equal;
use Milirulepilot\Comparison\Operators\GreaterThan;
use Milirulepilot\Comparison\Operators\LessThan;
use Milirulepilot\Comparison\Operators\NotEqual;
use Milirulepilot\Facade\Registry;

class Comparison
{
    public function compare(mixed $decision, mixed $condition)
    {
        return app($this->findOperator($decision->getOperator()))
            ->campare($decision->getValue(),$condition->getValue());
     }
    private function findOperator(string $operator)
    {
        $operators = Registry::getOperators();
        return match($operator){
            '=' => $operators['equal'],
            '>' => $operators['greaterThan'],
            '<' => $operators['lessThan'],
            '!=' => $operators['notEqual']
        };
    }
}
