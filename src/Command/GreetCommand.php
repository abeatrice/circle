<?php

namespace App\Command;

use App\Services\Greeter;
use Carbon\Carbon;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class GreetCommand
 */
class GreetCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'greet';

    protected function configure()
    {
        $this->setDescription('get a greeting');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $now = Carbon::now();
        $greeter = new Greeter();
        $greeting = $greeter->getGreeting();
        $output->writeln("[{$now->toDateTimeString()}] {$greeting}");
    }
}
