<?php

namespace Mili\RulePilot\Comparison\Operators;

use Mili\RulePilot\Contracts\Operator;

class In implements Operator
{

    public function campare(mixed $condition, mixed $decision): bool
    {
        return in_array($condition, $decision,true);
    }

    public function name(): string
    {
        return 'in';
    }
}
