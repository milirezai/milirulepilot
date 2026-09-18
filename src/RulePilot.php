<?php

namespace Mili\RulePilot;

use Illuminate\Support\Str;
use Mili\RulePilot\Condition\Dto;
use Mili\RulePilot\Contracts\ConditionBuilder;
use Mili\RulePilot\Contracts\Decision;
use Mili\RulePilot\Core\Engine;
use Mili\RulePilot\Facade\Registry;

class RulePilot
{
    private mixed $decision;
    protected ConditionBuilder $conditionBuilder;
    protected array $conditions;
    private Engine $engine;
    protected array $conditionContentArray;

    public function __construct(ConditionBuilder $conditionBuilder, Engine $engine)
    {
        $this->conditionBuilder = $conditionBuilder;
        $this->engine = $engine;
    }

    public function evaluate(mixed $decision, array $conditions)
    {
        $this->decision = $this->resolveDescisionInstance($decision);
        $this->conditions = $conditions;

        foreach ($this->conditions as $condition){
            $this->toContent($condition);
        }

        return $this->engine->evaluate($this->decision ,$this->conditionContentArray);
    }

    private function toContent(array $condition)
    {
        $content = new Dto();
        $this->conditionContentArray [] = $content->set($condition);
    }
    private function resolveDescisionInstance(mixed $decision): mixed
    {
        switch ($decision){
            case $decision instanceof Decision:
                return $decision;
                break;
            case in_array($decision,array_keys(Registry::getDecisions())):
                return app(Registry::getDecisions()[$decision]);
                break;
            case Str::startsWith($decision,'App\Decisions'):
                if (app($decision) instanceof Decision)
                    return app($decision);
                break;
        }
    }
}
