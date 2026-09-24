<?php

namespace Mili\RulePilot\Condition;

class PendingCondition
{
    protected string $field = '';
    protected mixed $expected;
    protected string $operator = '';
    protected bool $stopOrFail = false;

    public function field(string $field): static
    {
        $this->field = $field;
        return $this;
    }
    public function equal(mixed $value): static
    {
        $this->operator = '=';
        $this->expected = $value;
        return $this;
    }
    public function stopOrFail(): static
    {
        $this->stopOrFail = true;
        return $this;
    }
    public function value(string $value): static
    {
        $this->expected = $value;
        return $this;
    }
    public function make()
    {
        $conditionInstance = new SingleCondition('condition',$this->field,$this->expected,$this->operator,$this->stopOrFail);
        $this->refresh();

        return  $conditionInstance;
    }
    protected function refresh()
    {
        $this->stopOrFail = false;
    }
}
