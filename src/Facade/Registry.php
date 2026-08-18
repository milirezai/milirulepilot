<?php

namespace Milirulepilot\Facade;


use Illuminate\Support\Facades\Facade;
use Milirulepilot\Contracts\Decision;

/**
* @method array evaloate(Decision $contract, array $conditions)
*/
class Registry extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'miliRulePilot-registry';
    }
}

