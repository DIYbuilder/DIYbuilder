<?php

namespace diybuilder\command\init;

use diybuilder\command\baseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ProjectCommand extends BaseCommand
{
    protected function configure()
    {
        $this->setName('init:project')
        	->setDescription("init a project")
        	->setHelp("init a project");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
         $output->writeln([
            'Diybuilder 0.1 php auto build tools',
            '============',
            '',
        ]);

        // outputs a message followed by a "\n"
        $output->writeln('project name:');

    }
}
