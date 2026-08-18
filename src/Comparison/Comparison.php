<?php

namespace Milirulepilot\Comparison;

use Milirulepilot\Comparison\Operators\Equal;
use Milirulepilot\Comparison\Operators\GreaterThan;
use Milirulepilot\Comparison\Operators\LessThan;
use Milirulepilot\Comparison\Operators\NotEqual;

class Comparison
{
    public function compare(mixed $decision, mixed $condition)
    {
             return $this->findOperator($decision->getOperator())
                ->campare($decision->getValue(),$condition->getValue());
      }
    private function findOperator(string $operator)
    {
        $operatorClass = null;
        switch ($operator){
            case '=':
                $operatorClass = new Equal();
                break;
            case '>':
                $operatorClass = new GreaterThan();
                break;
            case '<':
                $operatorClass = new LessThan();
                break;
            case '!=':
                $operatorClass = new NotEqual();
                break;
        }
        return $operatorClass;
    }

}
