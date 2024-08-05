<?php 

	require dirname(__DIR__)  . '/truss/vendor/autoload.php';
	require "src/System/Functions.php";

	// set_error_handler('ErrorHandler::handleError');
	// set_exception_handler('ErrorHandler::handleException');
	
	use Src\System\DatabaseConnector;
	
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();

	$dbConnection = (new DatabaseConnector())->getConnection();
