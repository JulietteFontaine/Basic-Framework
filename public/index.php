<?php 

require_once '../vendor/autoload.php';

use Framework\App;
use GuzzleHttp\Psr7\ServerRequest;

$app = new App();
$request = ServerRequest::fromGlobals();

$response = $app->run($request);

\Http\Response\send($response);