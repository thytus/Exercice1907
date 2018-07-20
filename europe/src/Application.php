<?php
use App\AbstractApplication;

/**
 * This class is the main application. You will overwrite the "run" method to implement your code
 *
 * @author matthieu vallance <matthieu.vallance@vesperiagroup.com>
 */
class Application extends AbstractApplication
{
    /**
     * Run
     *
     * Execute the request process
     *
     * @return string|NULL
     */
    protected function run() : ?string
    {
        return 'Please, insert your code inside the src/Application::run method';
    }
}

