<?php

namespace App\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OfferCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:offer';

    protected function configure(): void
    {
        // ...
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {



        return Command::SUCCESS;

    }
}
