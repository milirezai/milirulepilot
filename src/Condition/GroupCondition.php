<?php

namespace Mili\RulePilot\Condition;

class GroupCondition
{
    protected array $children = [];
    public function __construct(
        protected string $logic
    ){}

    public function add(SingleCondition $singleCondition): static
    {
        $this->children[$this->logic] [] = $singleCondition->explain();
        return $this;
    }
    public function explain(): array
    {
        return [
            'type'     => 'group',
            'logic'    => $this->logic,
            'children' => $this->children[$this->logic],
        ];

    }
}
