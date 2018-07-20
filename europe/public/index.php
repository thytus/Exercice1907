<?php 

use Symfony\Component\HttpFoundation\Request;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$application = new Application(
    Request::createFromGlobals(),
    __DIR__.DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR.'dev.log'
);

$application->execute()->send();
