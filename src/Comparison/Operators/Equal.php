<?php

namespace Milirulepilot\Comparison\Operators;

class Equal extends Operator
{
    public function campare(mixed $condition, mixed $decision)
    {
        return $condition == $decision;
    }
}
