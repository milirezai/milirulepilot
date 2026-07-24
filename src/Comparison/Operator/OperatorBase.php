<?php

namespace MiliRulePilot\Comparison\Operator;

abstract class OperatorBase
{
    public abstract function campare(mixed $condition, mixed $decision);
}
