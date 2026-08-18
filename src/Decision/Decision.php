<?php

namespace Milirulepilot\Decision;

use Milirulepilot\Contracts\ConditionBuilder;
use Milirulepilot\Contracts\Decision as DecisionContract;

abstract class Decision implements DecisionContract
{
    protected ConditionBuilder $condition;
    public function __construct(ConditionBuilder $condition)
    {
        $this->condition = $condition;
    }
}
