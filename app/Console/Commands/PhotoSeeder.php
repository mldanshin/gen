<?php

namespace App\Console\Commands;

use App\Support\PhotoSeeder as Support;
use Illuminate\Console\Command;

final class PhotoSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'photo:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating random photos for people';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): int
    {
        if ($this->confirm('Attention! Execution of the destroy command, all available photos! Continue?')) {
            $res = Support::getInstance()->run();
            if ($res === true) {
                $this->info('The command was successful!');
                return 1;
            } else {
                $this->error("the command failed with an error");
                return 0;
            }
        } else {
            return 0;
        }
    }
}
