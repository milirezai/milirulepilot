<?php

namespace Milirulepilot\Condition;

use Milirulepilot\Contracts\ConditionContent;

class Dto implements ConditionContent
{
    public mixed $condition;

    public function set(mixed $condition): self
    {
        $this->condition = $condition;
         return $this;
    }
    public function getField()
    {
        return $this->condition['field'];
    }
    public function getValue()
    {
        return $this->condition['value'];
    }
    public function getOperator()
    {
        return $this->condition['operator'];
    }
    public function getStopOrFail(): bool
    {
        return $this->condition['stopOrFail'];
    }
}
