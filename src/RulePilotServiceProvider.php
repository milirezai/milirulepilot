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
use Milirulepilot\Facade\Registry as FacadeRegistry;
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
        FacadeRegistry::operators([
            'equal' => \Milirulepilot\Comparison\Operators\Equal::class,
            'notEqual' => \Milirulepilot\Comparison\Operators\NotEqual::class,
            'lessThan' => \Milirulepilot\Comparison\Operators\LessThan::class,
            'greaterThan' => \Milirulepilot\Comparison\Operators\GreaterThan::class
        ]);
    }
}
