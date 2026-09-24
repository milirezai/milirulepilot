<?php

namespace Mili\RulePilot\Comparison\Operators;

use Mili\RulePilot\Contracts\Operator;
use Illuminate\Support\Carbon;

class After implements Operator
{

    public function campare(mixed $condition, mixed $decision): bool
    {
        return  Carbon::make($condition)->isAfter($decision);
    }

    public function name(): string
    {
        return 'after';
    }
}
