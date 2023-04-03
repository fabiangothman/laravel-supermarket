<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CopyBaseImageCommand extends Command
{
    protected $signature = 'copy:image';

    protected $description = 'Copy image from project directory to storage directory';

    public function handle()
    {
        $source = public_path('demo_product.png');
        $destination = storage_path('app/public/images/demo_product.png');

        File::copy($source, $destination);

        $this->info('Image copied successfully.');
    }
}
