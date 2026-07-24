<?php

namespace MiliRulePilot\Commands;

use MiliRulePilot\Decision\DecisionBuilder\DecisionBuilder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class DecisionBuilderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:decision {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'decision build';

    /**
     * Execute the console command.
     */
    public function handle(DecisionBuilder $decisionBuilder)
    {
        $decisionName = $this->argument('name');
        if (!File::exists(app_path('Decisions')))
            File::makeDirectory(app_path('Decisions'));
        if ($decisionBuilder->has($decisionName))
            return $this->error('decision class already exists');
        if ($decisionBuilder->build($decisionName))
            return $this->info('decision class create success');

        return $this->error('error in build decision class');
    }
}
