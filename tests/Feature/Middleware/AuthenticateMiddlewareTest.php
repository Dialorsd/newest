<?php

namespace Tests\Feature\Middleware;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;
use Illuminate\Contracts\Auth\Factory as AuthFactory;

class AuthenticateMiddlewareTest extends TestCase
{
    public function testRedirectToLogin()
    {
        $response = $this->get('/home')->assertRedirect('/login');
    }
}
