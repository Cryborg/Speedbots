<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if ($request->wantsJson()) {
            if ($e instanceof AuthenticationException) {
                return response()->json(['message' => 'Unauthenticated.'], 403);
            }

            if ($e instanceof ModelNotFoundException) {
                return response()->json(['message' => $e->getMessage()], 404);
            }

            if ($e instanceof RouteNotFoundException) {
                return response()->json(['message' => $e->getMessage(),], 500);
            }

            return response()->json([
                'error_type' => get_class($e),
                'message' => $e->getMessage(),
            ]);
        }

        return parent::render($request, $e);
    }
}
