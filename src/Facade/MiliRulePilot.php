<?php

namespace MiliRulePilot\Facade;


use MiliRulePilot\Support\Contracts\DecisionBaseContract;
use Illuminate\Support\Facades\Facade;

/**
* @method array evaloate(DecisionBaseContract $contract,array $conditions)
*/
class MiliRulePilot extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'miliRulePilot';
    }
}

