<?php

namespace Milirulepilot\Core;

use Milirulepilot\Comparison\Comparison;
use Milirulepilot\Result\Result;

class Engine
{
    private Result $result;
    protected Comparison $comparison;
    protected array $conditions;
    protected mixed $decision;

    public function __construct(Result $result, Comparison $comparison)
    {
        $this->result = $result;
        $this->comparison = $comparison;
    }

    public function evaluate(mixed $decision,array $conditions)
    {
        $this->decision = $decision;
        $this->conditions = $conditions;

        foreach ($this->decision->conditions() as $decisionCondition)
        {

            // find condition
            $conditionFind =  $this->conditionFinder($decisionCondition->getField());

            if ($conditionFind)
            {
                // chack value
                $comparison = $this->comparison->compare($decisionCondition,$conditionFind);

                if ($comparison)
                {
                    $history [$decisionCondition->getField()] = true;
                }
                else
                {
                    if ($decisionCondition->getStopOrFail()){
                        $history[$decisionCondition->getField()] = false;
                    }
                    $history[$decisionCondition->getField()] = false;
                }

            }
            else{
                if ($decisionCondition->getStopOrFail()){
                    $history[$decisionCondition->getField()] = false;
                }
                $history[$decisionCondition->getField()] = false;
            }
        }

        $history['decisionName'] = $this->decision->name();
        if ((bool)  !in_array(false,array_values($history))){
            $history['matched'] = true;
            $history['decisionResult'] = $this->decision->result();
            return $this->result->init($history);
        }
        else
        {
            $history['matched'] = false;
            return $this->result->init($history);
        }

    }
    private function conditionFinder(string $decisionFieldName)
    {
        foreach ($this->conditions as $condition){
            if ($condition->getField() == $decisionFieldName)
                return $condition;
        }
        return false;
    }

}
