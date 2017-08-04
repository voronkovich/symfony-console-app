#!/usr/bin/env php
<?php

require file_exists(__DIR__.'/vendor/autoload.php') ? __DIR__.'/vendor/autoload.php' : __DIR__.'/../../autoload.php';

$appName = 'App';
$appVersion = '0.0.1-DEV';

$app = new Symfony\Component\Console\Application($appName, $appVersion);

$app->add(new App\Command\AppCommand());

$app->run();
