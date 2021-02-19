#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use App\Command\GreetCommand;

$application = new Application();
$application->add(new GreetCommand());
$application->run();
