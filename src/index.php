<?php
// application.php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;

use diybuilder\command\init\ProjectCommand;
use diybuilder\command\init\ModuleCommand;
use diybuilder\command\init\DatabaseCommand;
use diybuilder\command\init\AppCommand;
use diybuilder\command\init\ViewCommand;


$application = new Application();

// ... register commands
$application->addCommands(
	[
		new ProjectCommand(),
		new ModuleCommand(),
		new DatabaseCommand(),
		new AppCommand(),
		new ViewCommand(),
	]
	
);

$application->run();