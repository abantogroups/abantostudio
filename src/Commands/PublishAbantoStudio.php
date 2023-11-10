<?php

namespace Abanto\AbantoStudio\Commands;

use Illuminate\Console\Command;

class PublishAbantoStudio extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'abantostudio:Install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publishes Dashboard assets and views ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'views' ,'--force' => true]);
        $this->callSilent('vendor:publish', ['--tag' => 'public' ,'--force' => true]);

        $this->info('Copied Directory [abanto/abantostudio/src/Views] To [/resources/views/abantostudio]');
        $this->info('Copied Directory [abanto/abantostudio/src/Assets] To [/public/assets]');
        $this->info('AbantoStudio was installed successfully.');
        $this->info("
       ____                  _       _                                  _
      |  _ \    __ _   ___  | |__   | |__     ___     __ _   _ __    __| |
      | | | |  / _` | / __| | '_ \  | '_ \   / _ \   / _` | | '__|  / _` |
      | |_| | | (_| | \__ \ | | | | | |_) | | (_) | | (_| | | |    | (_| |
      |____/   \__,_| |___/ |_| |_| |_.__/   \___/   \__,_| |_|     \__,_|


            ");
    }
}
