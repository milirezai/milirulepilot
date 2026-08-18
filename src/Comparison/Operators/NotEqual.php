<?php

namespace Milirulepilot\Comparison\Operators;

class NotEqual extends Operator
{
    public function campare(mixed $condition, mixed $decision)
    {
        return $condition != $decision;
    }
}
