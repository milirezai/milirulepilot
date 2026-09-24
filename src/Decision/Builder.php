<?php

namespace Mili\RulePilot\Decision;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Builder
{
    public function has(string $name): bool
    {
        return File::exists(app_path('Decisions').'/'.$this->resolveName($name).'.php');
    }
    public function build(string $decisionName)
    {
        $setName = $this->resolveName($decisionName);
        $path = app_path('Decisions').'/'.$setName.'.php';
        $stub = __DIR__.'/../Stub/decision.stub';

        if (!$this->has($setName)){
            File::copy($stub,$path);
            File::replaceInFile(['{className}','{decisionName}'],[$setName,$decisionName],$path);
            return true;
        }
        return false;
    }
    public function delete(string $name)
    {
        $name = $this->resolveName($name);
        if (!$this->has($name))
            return false;
        File::delete(app_path('Decisions/').$name.'.php');
        return true;
    }

    public function list(): array
    {
        return collect(glob(app_path('Decisions/').'*.php'))->map(function ($decision){
            return File::name($decision);
        })->toArray();
    }
    protected function resolveName(string $name): string
    {
        return Str::endsWith($name,'Decision') ? $name : $name.'Decision';
    }
}
