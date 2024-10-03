<?php

namespace Koverae\KoveraeUiBuilder\Commands;

use Illuminate\Console\Command;

class PackageInstallMessageCommand extends Command
{

    protected $signature = 'package:message';
    protected $description = 'Displays a message after package installation';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Thank you for installing our package! 🎉');
        $this->info('Please make sure to run any required migrations and publish assets.');
    }
}