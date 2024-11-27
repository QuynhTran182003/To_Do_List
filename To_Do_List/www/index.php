<?php
declare(strict_types=1);

use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

// Load the .env file
//$dotenv = new Dotenv();
//$dotenv->load(__DIR__ . '/../.env'); // Correct relative path

$bootstrap = new App\Bootstrap;
$container = $bootstrap->bootWebApplication();
$application = $container->getByType(Nette\Application\Application::class);
$application->run();
