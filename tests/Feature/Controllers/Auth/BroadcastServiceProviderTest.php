<?php

namespace Tests\Unit\Providers;

use App\Providers\BroadcastServiceProvider;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class BroadcastServiceProviderTest extends TestCase
{
    public function testBroadcastServiceProviderBoot()
    {
        $serviceProvider = new BroadcastServiceProvider($this->app);
        $serviceProvider->boot();

        
        Artisan::call('route:clear');

        
        $this->assertFalse($this->app->routesAreCached());

        
    }
}
