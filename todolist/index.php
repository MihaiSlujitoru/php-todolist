<?php 

require 'vendor/autoload.php';
require 'core/boostrap.php';

use App\Core\Request;
use App\Core\Router;

Router::load('app/routes.php')->direct(
		Request::uri(),
		Request::method()
	);