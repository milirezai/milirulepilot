<?php

namespace MiliRulePilot\Condition;

use MiliRulePilot\Condition\Dto\ConditionDto;
use MiliRulePilot\Support\Contracts\ConditionBuildContract;
use MiliRulePilot\Support\Contracts\ConditionContentContract;

abstract class ConditionBase implements ConditionBuildContract
{
    public string $field;
    public mixed $value;
    public string $operator;
    public bool $stopOrFail = false;

    public function make()
    {
        $con = new ConditionDto();
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
