<?php

namespace App\Console\Commands;

use App\Support\DownloadRepository;
use Illuminate\Console\Command;

final class DirectoryDownloadClear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'download:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears download directory';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(DownloadRepository $support): int
    {
        $res = $support->clear();
        if ($res === true) {
            $this->info('The command was successful!');
            return 1;
        } else {
            $this->error("the command failed with an error");
            return 0;
        }
    }
}
