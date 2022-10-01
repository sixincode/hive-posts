<?php

namespace Sixincode\HivePosts\Commands;

use Illuminate\Console\Command;

class HivePostsCommand extends Command
{
    public $signature = 'hive-posts';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
