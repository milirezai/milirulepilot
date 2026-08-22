<?php
namespace Milirulepilot\Registry;

class Registry
{
    protected array $commands = [];
    protected array $operators = [];
    protected array $decisions = [];

    public function commands(array $commands): self
    {
        $this->commands = $commands;
        return $this;
    }
    public function operators(array $operators): self
    {
        $this->operators = $operators;
        return  $this;
    }
    public function decisions(array $decisions): self
    {
        $this->decisions = $decisions;
        return $this;
    }
    public function getCommands(): array
    {
        return $this->commands;
    }

    public function getDecisions(): array
    {
        return $this->decisions;
    }

    public function getOperators(): array
    {
        return $this->operators;
    }
    public function command(string $command): self
    {
        array_push($this->commands,$command);
        return $this;
    }
    public function operator(string $operator): self
    {
        array_push($this->operators,$operator);
        return $this;
    }
    public function decision(string $decision): self
    {
        array_push($this->decisions,$decision);
        return $this;
    }
}
