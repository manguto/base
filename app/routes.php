<?php
declare(strict_types = 1)
	;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
// use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Application\Actions\Frontend\Home\ViewFrontendHomeAction;
// use App\Application\Actions\Frontend\User\ListUsersAction;
// use App\Application\Actions\Frontend\User\ViewUserAction;
return function (App $app){
	/*
	 * $app->options('/{routes:.*}', function (Request $request, Response $response) {
	 * // CORS Pre-Flight OPTIONS Request Handler
	 * return $response;
	 * });
	 *
	 * $app->group('/users', function (Group $group) {
	 * $group->get('', ListUsersAction::class);
	 * $group->get('/{id}', ViewUserAction::class);
	 * });
	 */
	{
		$app->get('/hello', function (Request $request, Response $response){
			$response->getBody()->write('Hello world!');
			return $response;
		});
	}
	{
		$app->redirect('/', 'home');
		$app->get('/home', ViewFrontendHomeAction::class)->setName('frontend_home');
	}
	
};
