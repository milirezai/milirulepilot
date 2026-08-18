<?php

namespace Milirulepilot;

use Illuminate\Support\ServiceProvider;
use Milirulepilot\Commands\DecisionBuilder;
use Milirulepilot\Commands\DecisionDelete;
use Milirulepilot\Commands\DecisionList;
use Milirulepilot\Condition\Builder;
use Milirulepilot\Condition\Dto;
use Milirulepilot\Contracts\ConditionBuilder;
use Milirulepilot\Contracts\ConditionContent;
use Milirulepilot\Registry\Registry;

class RulePilotServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        $this->app->bind(ConditionContent::class,Dto::class);

        $this->app->bind(ConditionBuilder::class, Builder::class);

        $this->app->bind('miliRulePilot',function (){
            return $this->app->make(RulePilot::class);
        });

        $this->app->bind('miliRulePilot-registry',function (){
            return $this->app->make(Registry::class);
        });

        $this->commands([
            DecisionBuilder::class,
            DecisionList::class,
            DecisionDelete::class
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
