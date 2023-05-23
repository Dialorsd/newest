<?php
namespace Tests\Unit\Http\Middleware;
use Tests\TestCase;

class TrustHostsTest extends TestCase
{
    public function testRequestWithTrustedHost()
    {
        $trustedHost = 'example.com';

        $response = $this->call('GET', '/', [], [], [], [
            'HTTP_HOST' => $trustedHost,
        ]);

        $response->assertStatus(200);
    }

    public function testRequestWithUntrustedHost()
    {
        $untrustedHost = 'untrusted.com';

        $response = $this->call('GET', '/', [], [], [], [
            'HTTP_HOST' => $untrustedHost,
        ]);

        $response->assertStatus(200);
    }
}
