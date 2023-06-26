<?php

declare(strict_types=1);

namespace App\Application\Actions\Frontend;

use App\Application\Actions\Action;
use App\Domain\User\UserRepository;
use Psr\Log\LoggerInterface;

abstract class FrontendAction extends Action
{
	
	public function __construct(LoggerInterface $logger)
	{
		parent::__construct($logger);		
	}
}
