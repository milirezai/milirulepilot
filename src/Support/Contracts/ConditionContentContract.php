<?php

namespace MiliRulePilot\Support\Contracts;

interface ConditionContentContract
{
    public function set(mixed $condition): self;
    public function getField();
    public function getValue();

    public function getOperator();
    public function getStopOrFail(): bool;

}
