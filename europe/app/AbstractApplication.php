<?php
namespace App;

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;
use Symfony\Component\HttpFoundation\Response;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Symfony\Component\HttpFoundation\Request;

abstract class AbstractApplication
{
    private $logger;
    
    private $request;
    
    public function __construct(Request $request, string $logPath, int $logLevel = Logger::DEBUG)
    {
        $this->logger = new Logger('App');
        $this->logger->pushHandler(new StreamHandler($logPath, $logLevel));
        
        $this->request = $request;
    }
    
    public function execute()
    {
        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());
        $whoops->register();
        
        try {
            $this->logger->debug('Launch the application run');
            $result = $this->run();
            $this->logger->debug('No errors', ['result length' => strlen($result)]);
            $response = new Response($result);
            $this->configureResponse($response);
            
            return $response;
        } catch (\Exception $exception) {
            $this->logger->debug('Error reported', ['message' => $exception->getMessage(), 'trace' => $exception->getTrace()]);
            throw $exception;
        }
    }
    
    protected function getRequest() : Request
    {
        return $this->request;
    }
    
    protected function getLogger() : Logger
    {
        return $this->logger;
    }
    
    protected function configureResponse(Response $response)
    {}
    
    protected abstract function run() : ?string;
}

