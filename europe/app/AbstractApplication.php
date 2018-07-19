<?php
namespace App;

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;
use Symfony\Component\HttpFoundation\Response;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

abstract class AbstractApplication
{
    protected $logger;
    
    public function execute()
    {
        $this->logger = new Logger('App');
        $this->logger->pushHandler(new StreamHandler(__DIR__.DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR.'dev.log', Logger::DEBUG));
        
        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());
        $whoops->register();
        
        try {
            $this->logger->debug('Launch the application run');
            $result = $this->run();
            $this->logger->debug('No errors', ['result length' => strlen($result)]);
            return new Response($result);
        } catch (\Exception $exception) {
            $this->logger->debug('Error reported', ['message' => $exception->getMessage(), 'trace' => $exception->getTrace()]);
            throw $exception;
        }
    }
    
    protected abstract function run() : ?string;
}

