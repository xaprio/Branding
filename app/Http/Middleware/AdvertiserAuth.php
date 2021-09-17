<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Session;

class AdvertiserAuth extends Middleware
{
    public function handle($request, Closure $next) {
        $user = Session::get('advertiser');
        if (isset($user) && $user->token) {
            return $next($request);
        }

        return  redirect()->route('advertiser.login');
    }
}
