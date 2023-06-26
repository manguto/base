<?php
declare(strict_types = 1)
	;
return function (string $__DIR__){
	{ // production
		define('APP_IN_PRODUCTION', false);
	}
	// ####################################################################################################
	{ // TWIG (TEMPLATES)
		{ // directories
			define('TWIG_TEMPLATES_DIR', $__DIR__ . '/../templates');
			define('TWIG_TEMPLATES_CACHE', $__DIR__ . '/../cache');
		}
	}
	// ####################################################################################################
	{ // DATABASE
		{ // Path to folder with tables
			define('LAZER_DATA_PATH', realpath($__DIR__) . '/../src/Infrastructure/MyDB/');
			// deb(LAZER_DATA_PATH);
		}
	}
	// ####################################################################################################
	{ // base path
		define('APP_BASE_PATH', dirname($_SERVER['PHP_SELF'], (strpos($_SERVER['PHP_SELF'], 'public') !== false ? 2 : 1)));
		// deb(APP_BASE_PATH);
	}
	{ // APP PUBLIC DIRECTORY
		define('APP_PUBLIC_DIR', $__DIR__);
		// deb(APP_PUBLIC_DIR);
	}
	{ // CONTAINER
		{ // container builder compilation dir
			define('COMPILATION_DIR', $__DIR__ . '/../var/cache');
			// deb(COMPILATION_DIR);
		}
	}
};
