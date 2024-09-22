<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\JeUrednik;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )

        // "If you want it to be triggered in every call you can append it to the bootstrap/app.php"
        // da li ovo znaci da ce ovaj middleware da se poziva za svaku rutu?
    ->withMiddleware(function (Middleware $middleware) {    
        //   $middleware->append(JeUrednik::class);
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
