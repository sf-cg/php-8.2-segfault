<?php

namespace Tests\Unit;

use GuzzleHttp\Client;
use Tests\TestCase;
use VCR\VCR;

class ExampleTest extends TestCase
{
    /**
     * test that when we turn on VCR we get a segfault
     */
    public function testSegFaultOccursUsingVCR(): void
    {
        VCR::turnOn();
        VCR::insertCassette('example');

        $guzzleClient = new Client([]);
        $guzzleClient->get('https://example.com/');

        $this->assertTrue(true);
    }
}
