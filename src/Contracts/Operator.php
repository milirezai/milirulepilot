<?php

namespace Mili\RulePilot\Contracts;

interface Operator
{
    public function campare(mixed $condition, mixed $decision): bool;
    public function name(): string;
}