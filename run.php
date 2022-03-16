#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use \App\Command\OfferCommand;

$application = new Application();

$application->add(new OfferCommand());

// ... register commands

$application->run();