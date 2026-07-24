<?php

namespace MiliRulePilot\Comparison;

use MiliRulePilot\Comparison\Operator\EqualOperator;
use MiliRulePilot\Comparison\Operator\GreaterThanOperator;
use MiliRulePilot\Comparison\Operator\LessThanOperator;
use MiliRulePilot\Comparison\Operator\NotEqualOperator;

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
                $operatorClass = new EqualOperator();
                break;
            case '>':
                $operatorClass = new GreaterThanOperator();
                break;
            case '<':
                $operatorClass = new LessThanOperator();
                break;
            case '!=':
                $operatorClass = new NotEqualOperator();
                break;
        }
        return $operatorClass;
    }

}
