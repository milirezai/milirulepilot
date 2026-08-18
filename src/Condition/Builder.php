<?php

namespace Milirulepilot\Condition;

use Milirulepilot\Contracts\ConditionBuilder;

class Builder extends Condition
{

    public function field(string $field): ConditionBuilder
    {
        $this->field = $field;
        return $this;
    }

    public function equal(mixed $value): ConditionBuilder
    {
        $this->value = $value;
        $this->operator = '=';
        return $this;
    }

    public function notEqual(mixed $value): ConditionBuilder
    {
        $this->value = $value;
        $this->operator = '!=';
        return $this;
    }
    public function greaterThan(mixed $value): ConditionBuilder
    {
        $this->value = $value;
        $this->operator = '>';
        return $this;
    }
    public function lessThan(mixed $value): ConditionBuilder
    {
        $this->value = $value;
        $this->operator = '<';
        return $this;
    }

    public function stopOrFail(): ConditionBuilder
    {
        $this->stopOrFail = true;
        return $this;
    }

}
