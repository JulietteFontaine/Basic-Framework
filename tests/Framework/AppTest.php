<?php

namespace Tests\Framework;

use Framework\App;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Psr7\ServerRequest;

class AppTest extends TestCase {

    public function testRedirectTrainlingSlash() {
        $app = new App();
        $request = new ServerRequest('GET', '/ze/');
        $response = $app->run($request);

        $this->assertContains('/ze', $response->getHeader('Location'));
        $this->assertEquals(301, $response->getStatusCode());
    }

}