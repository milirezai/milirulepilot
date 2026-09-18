<?php

namespace Mili\RulePilot\Comparison\Operators;

abstract class Operator
{
    public abstract function campare(mixed $condition, mixed $decision);
}
