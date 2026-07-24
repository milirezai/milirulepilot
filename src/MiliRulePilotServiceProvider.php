<?php

namespace MiliRulePilot;

use MiliRulePilot\Commands\DecisionBuilderCommand;
use MiliRulePilot\Commands\DecisionDeleteCommand;
use MiliRulePilot\Commands\DecisionListCommand;
use MiliRulePilot\Condition\Builder\ConditionBuilder;
use MiliRulePilot\Condition\Dto\ConditionDto;
use MiliRulePilot\RulePilot\MiliRulePilot;
use MiliRulePilot\Support\Contracts\ConditionBuildContract;
use MiliRulePilot\Support\Contracts\ConditionContentContract;
use Illuminate\Support\ServiceProvider;

class MiliRulePilotServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        $this->app->bind(ConditionContentContract::class,ConditionDto::class);

        $this->app->bind(ConditionBuildContract::class, ConditionBuilder::class);

        $this->app->bind('miliRulePilot',function (){
            return $this->app->make(MiliRulePilot::class);
        });

        $this->commands([
            DecisionBuilderCommand::class,
            DecisionListCommand::class,
            DecisionDeleteCommand::class
        ]);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
