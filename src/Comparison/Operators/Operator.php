<?php

namespace Milirulepilot\Comparison\Operators;

abstract class Operator
{
    public abstract function campare(mixed $condition, mixed $decision);
}
