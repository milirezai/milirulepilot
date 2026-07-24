<?php

namespace MiliRulePilot\Support\Contracts;

interface ConditionBuildContract
{
    public function field(string $field): self;
    public function stopOrFail(): self;
    public function equal(mixed $value): self;
    public function notEqual(mixed $value): self;
    public function greaterThan(mixed $value): self;
    public function lessThan(mixed $value): self;

}
