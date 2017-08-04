<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AppCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:command')
            ->setDescription('App command')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
