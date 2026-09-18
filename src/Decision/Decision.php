<?php

namespace Mili\RulePilot\Decision;

use Mili\RulePilot\Contracts\ConditionBuilder;
use Mili\RulePilot\Contracts\Decision as DecisionContract;

abstract class Decision implements DecisionContract
{
    protected ConditionBuilder $condition;
    public function __construct(ConditionBuilder $condition)
    {
        $this->condition = $condition;
    }
}
