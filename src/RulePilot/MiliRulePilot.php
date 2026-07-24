<?php

namespace MiliRulePilot\RulePilot;


use MiliRulePilot\Condition\Dto\ConditionDto;
use MiliRulePilot\Core\RulePilotEngine;
use MiliRulePilot\Support\Contracts\ConditionBuildContract;
use MiliRulePilot\Support\Contracts\DecisionBaseContract;

class MiliRulePilot
{
    private ?DecisionBaseContract $decision;
    protected ConditionBuildContract $conditionBuilder;
    protected mixed $conditions;
    private RulePilotEngine $engine;
    protected array $conditionContentArray;

    public function __construct(ConditionBuildContract $conditionBuilder,RulePilotEngine $engine)
    {
        $this->conditionBuilder = $conditionBuilder;
        $this->engine = $engine;
    }

    public function evaloate(DecisionBaseContract $decision,array $conditions)
    {
        $this->decision = $decision;
        $this->conditions = $conditions;
        foreach ($this->conditions as $condition){
            $this->toContent($condition);
        }
        return $this->engine->evaluate($this->decision ,$this->conditionContentArray);
    }

    private function toContent(array $condition)
    {
        $content = new ConditionDto();
        $this->conditionContentArray [] = $content->set($condition);
    }

}
