<?php

namespace MiliRulePilot\Commands;

use MiliRulePilot\Decision\DecisionBuilder\DecisionBuilder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DecisionDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'decision:delete {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'decision delete';

    /**
     * Execute the console command.
     */
    public function handle(DecisionBuilder $decisionBuilder)
    {
        $name = $this->argument('name');
        if ($decisionBuilder->delete($name))
            return $this->info('decision delete success');
        return $this->error('decision not deleted');
    }

}
