<?php

namespace Milirulepilot\Facade;

use Illuminate\Support\Facades\Facade;

class RulePilot extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'miliRulePilot';
    }
}

