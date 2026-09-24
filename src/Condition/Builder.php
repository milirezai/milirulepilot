<?php

namespace Mili\RulePilot\Condition;

use Mili\RulePilot\Condition\GroupCondition;
use Mili\RulePilot\Condition\PendingCondition;
use Mili\RulePilot\Condition\SingleCondition;

class Builder
{
    public function and(\Closure $closure): array
    {
        return $this->resolve('and',$closure);
    }

    public function or(\Closure $closure): array
    {
        return $this->resolve('or',$closure);
    }
    public function any(\Closure $closure): array
    {
        return $this->resolve('any',$closure);
    }
    public function not(\Closure $closure): array
    {
        return $this->resolve('not',$closure);
    }
    protected function resolve(string $logic, \Closure $closure): array
    {
        $group = new GroupCondition($logic);
        $conditions = call_user_func($closure,app(PendingCondition::class));
        $items = collect($conditions)->map(function ($item) use ($group){
            return $group->add($item);
        })->last();

        return $items->explain();
    }
}
