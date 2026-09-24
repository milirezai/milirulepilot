<?php

namespace Mili\RulePilot\Comparison\Operators;

use Mili\RulePilot\Contracts\Operator;

class Between implements Operator
{

    public function campare(mixed $condition, mixed $decision): bool
    {
        return true;
    }

    public function name(): string
    {
        return 'between';
    }
}
