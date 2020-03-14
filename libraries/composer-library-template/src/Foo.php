<?php

declare(strict_types=1);

namespace ridvanaltun\ComposerLibraryTemplate;

use GuzzleHttp\Client;

class Foo
{
    public function testGuzzle()
    {
        $client = new Client([
            'base_uri' => 'http://httpbin.org',
            'timeout' => 2.0,
        ]);
        $response = $client->request('GET', '/get');
        var_dump($response);
    }
}
