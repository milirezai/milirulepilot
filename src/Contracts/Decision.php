<?php

namespace Milirulepilot\Contracts;

interface Decision
{
    public function name(): string;
    public function conditions(): array;
    public function result(): mixed;
}
