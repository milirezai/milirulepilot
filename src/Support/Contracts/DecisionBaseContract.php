<?php

namespace MiliRulePilot\Support\Contracts;

interface DecisionBaseContract
{
    public function name(): string;
    public function conditions(): array;
    public function result(): mixed;
}
