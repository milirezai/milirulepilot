<?php

namespace Milirulepilot\Condition;

use Milirulepilot\Contracts\ConditionBuilder;

abstract class Condition implements ConditionBuilder
{
    public string $field;
    public mixed $value;
    public string $operator;
    public bool $stopOrFail = false;

    public function make()
    {
        $con = new Dto();
        return $con->set($this->convertToArray());
    }

    protected function convertToArray(): array
    {
        $condition = [
            'field' => $this->field,
            'value' => $this->value,
            'operator' => $this->operator,
            'stopOrFail' => $this->stopOrFail
        ];

        $this->stopOrFail = false;

        return $condition;
    }

}
