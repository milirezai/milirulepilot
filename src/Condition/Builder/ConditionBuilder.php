<?php

namespace MiliRulePilot\Condition\Builder;

use MiliRulePilot\Condition\ConditionBase;
use MiliRulePilot\Support\Contracts\ConditionBuildContract;



class ConditionBuilder extends ConditionBase
{

    public function field(string $field): ConditionBuildContract
    {
        $this->field = $field;
        return $this;
    }

    public function equal(mixed $value): ConditionBuildContract
    {
        $this->value = $value;
        $this->operator = '=';
        return $this;
    }

    public function notEqual(mixed $value): ConditionBuildContract
    {
        $this->value = $value;
        $this->operator = '!=';
        return $this;
    }
    public function greaterThan(mixed $value): ConditionBuildContract
    {
        $this->value = $value;
        $this->operator = '>';
        return $this;
    }
    public function lessThan(mixed $value): ConditionBuildContract
    {
        $this->value = $value;
        $this->operator = '<';
        return $this;
    }

    public function stopOrFail(): ConditionBuildContract
    {
        $this->stopOrFail = true;
        return $this;
    }

}
