<?php

namespace Mili\RulePilot\Comparison\Operators;

use Mili\RulePilot\Contracts\Operator;
use Illuminate\Support\Carbon;

class BetweenDates implements Operator
{

    public function campare(mixed $condition, mixed $decision): bool
    {
        return Carbon::make($condition)->isBetween($decision[0],$decision[1]);
    }

    public function name(): string
    {
        return 'betweenDates';
    }
}
