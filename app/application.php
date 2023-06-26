<?php
declare(strict_types = 1)
	;
use Slim\App;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

return function (App $app){
	{ // Ajuste do caminho
		$app->setBasepath(APP_BASE_PATH);
	}
	{ // Add Twig-View Middleware
		{ // Create Twig
			$twig = Twig::create(TWIG_TEMPLATES_DIR, [
					'cache' => (APP_IN_PRODUCTION ? TWIG_TEMPLATES_CACHE : false)
			]);
		}
		$app->add(TwigMiddleware::create($app, $twig));
	}
};
