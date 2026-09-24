<?php

namespace Mili\RulePilot\Comparison\Operators;

use Mili\RulePilot\Contracts\Operator;
use Illuminate\Support\Carbon;

class Before implements Operator
{

    public function campare(mixed $condition, mixed $decision): bool
    {
        return Carbon::make($condition)->isBefore($decision);
    }

    public function name(): string
    {
        return 'before';
    }
}
