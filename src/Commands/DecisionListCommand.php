<?php

namespace MiliRulePilot\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DecisionListCommand extends Command
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
    public function handle()
    {
        $decisionList = glob(app_path('Decisions/').'*.php');
        foreach ($decisionList as $item){
            echo $this->line(File::name($item));
        }
    }

}
