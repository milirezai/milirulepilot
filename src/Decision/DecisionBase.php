<?php

namespace MiliRulePilot\Decision;

use MiliRulePilot\Support\Contracts\ConditionBuildContract;
use MiliRulePilot\Support\Contracts\DecisionBaseContract;

abstract class DecisionBase implements DecisionBaseContract
{
    protected ConditionBuildContract $condition;
    public function __construct(ConditionBuildContract $condition)
    {
        $this->condition = $condition;
    }
}
