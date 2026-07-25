<?php

namespace MiliRulePilot\Decision\DecisionBuilder;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DecisionBuilder
{
    public function has(string $name): bool
    {
        return File::exists(app_path('Decisions').'/'.$name.'.php');
    }
    public function build(string $decisionName)
    {
        $setName = Str::endsWith($decisionName,'Decision') ? $decisionName : $decisionName.'Decision';
        $path = app_path('Decisions').'/'.$setName.'.php';
        $stub = __DIR__.'/../../../src/Stub/decision.stub';

        if (!$this->has($setName)){
            File::copy($stub,$path);
            File::replaceInFile(['{className}','{decisionName}'],[$setName,$decisionName],$path);
            return true;
        }
        return false;
    }
    public function delete(string $name)
    {
        if (!$this->has($name))
            return false;
        File::delete(app_path('Decisions/').$name.'.php');
        return true;
    }

    public function list()
    {
        $decisionList = glob(app_path('Decisions/').'*.php');
        foreach ($decisionList as $item){
            echo File::name($item);
        }
    }
}
