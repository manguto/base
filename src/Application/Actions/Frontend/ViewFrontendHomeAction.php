<?php
declare(strict_types = 1)
;

namespace App\Application\Actions\Frontend;

use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;
use manguto\lib\LibCharts;

class ViewFrontendHomeAction extends FrontendAction {
	/**
	 *
	 * {@inheritdoc}
	 */
	protected function action(): Response{
		{
			$view = Twig::fromRequest($this->request);
			{
				{ // args
					$this->args['date'] = date('d/m/Y');					
				}
				$response = $view->render($this->response, 'frontend/home/base.twig', $this->args);
			}
			$this->logger->info("Página ".__CLASS__." visualizada.");
		}
		return $response;
	}
}
