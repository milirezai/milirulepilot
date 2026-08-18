<?php

namespace Milirulepilot\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Milirulepilot\Decision\Builder;

class DecisionDelete extends Command
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
    public function handle(Builder $decisionBuilder)
    {
        $name = $this->argument('name');
        if ($decisionBuilder->delete($name))
            return $this->info('decision delete success');
        return $this->error('decision not deleted');
    }

}
