<?php
// comment out the following line to disable debug mode
defined('YII_DEBUG') or define('YII_DEBUG', true);

$frameworkPath = __DIR__ . '/../../framework';

require($frameworkPath . '/Yii.php');
// Register Composer autoloader
@include($frameworkPath . '/vendor/autoload.php');

$config = require(__DIR__ . '/protected/config/main.php');
$application = new yii\web\Application($config);
$application->run();
