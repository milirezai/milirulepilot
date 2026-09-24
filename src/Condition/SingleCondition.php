<?php

namespace Mili\RulePilot\Condition;

class SingleCondition
{
    public function __construct(
        protected string $type,
        protected string $field,
        protected mixed $expected,
        protected string $operator,
        protected bool $stopOrFail,
    ){}
    public function explain(): array
    {
        return [
            'type'      => $this->type,
            'field'     => $this->field,
            'expected'  => $this->expected,
            'operator'  => $this->operator,
            'stopOrFail' => $this->stopOrFail
        ];
    }
}
