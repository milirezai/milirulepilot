<?php

namespace Mili\RulePilot\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Mili\RulePilot\Decision\Builder;

class DecisionList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'decision:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'decision list';

    /**
     * Execute the console command.
     */
    public function handle(Builder $decisionBuilder)
    {
        echo $this->line($decisionBuilder->list());
    }

}
