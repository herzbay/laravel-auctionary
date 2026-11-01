<?php
namespace App\Http\Middleware;

use Closure;
use RealRashid\SweetAlert\Facades\Alert;

class SweetAlertMiddleware
{
    public function handle($request, Closure $next)
    {
        if (session('success')) {
            Alert::success('Success', session('success'));
        }
        return $next($request);
    }
}
