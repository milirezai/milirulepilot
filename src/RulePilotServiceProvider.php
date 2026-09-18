<?php

namespace Mili\RulePilot;

use Illuminate\Support\ServiceProvider;
use Mili\RulePilot\Commands\DecisionBuilder;
use Mili\RulePilot\Commands\DecisionDelete;
use Mili\RulePilot\Commands\DecisionList;
use Mili\RulePilot\Condition\Builder;
use Mili\RulePilot\Condition\Dto;
use Mili\RulePilot\Contracts\ConditionBuilder;
use Mili\RulePilot\Contracts\ConditionContent;
use Mili\RulePilot\Registry\Registry;
use Mili\RulePilot\Facade\Registry as FacadeRegistry;
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
            'equal' => \Mili\RulePilot\Comparison\Operators\Equal::class,
            'notEqual' => \Mili\RulePilot\Comparison\Operators\NotEqual::class,
            'lessThan' => \Mili\RulePilot\Comparison\Operators\LessThan::class,
            'greaterThan' => \Mili\RulePilot\Comparison\Operators\GreaterThan::class
        ]);
    }
}
