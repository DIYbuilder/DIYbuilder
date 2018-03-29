<?php

namespace diybuilder\command\init;

use diybuilder\command\baseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DatabaseCommand extends BaseCommand
{
    protected function configure()
    {
        $this->setName('init:database')
        	->setDescription("init a database")
        	->setHelp("init database table");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
         $output->writeln([
            'Diybuilder 0.1 php auto build tools',
            '============',
            '',
        ]);

        // outputs a message followed by a "\n"
        $output->writeln('database config:');

    }
}
