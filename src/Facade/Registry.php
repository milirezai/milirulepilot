<?php

namespace Mili\RulePilot\Facade;


use Illuminate\Support\Facades\Facade;
use Mili\RulePilot\Contracts\Decision;

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

