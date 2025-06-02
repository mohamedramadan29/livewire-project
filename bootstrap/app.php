<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin'=>Admin::class,
        ]);
        $middleware->redirectGuestsTo(function(){
            if(request()->is('*/dashboard/*')){
                return route('dashboard.login');
            }else{
                //return route('login');
            }
        });
        $middleware->redirectUsersTo(function(){
           if(Auth::guard('Admin')->check()){
            return to_route('dashboard.index');
           }else{
            return to_route('dashboard.login');
           }
        });
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
