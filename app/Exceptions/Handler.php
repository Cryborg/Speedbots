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
        $response = [
            'error_type' => get_class($e),
            'message' => $e->getMessage(),
        ];

        if ($request->is('api*')) {
            if ($e instanceof AuthenticationException) {
                $response['message'] = 'Unauthenticated';
                return response()->json($response, 403);
            }

            if ($e instanceof ModelNotFoundException) {
                $response['message'] = 'This ID does not exist';
                return response()->json($response, 404);
            }

            if ($e instanceof RouteNotFoundException) {
                $response['message'] = 'This route does not exist';
                return response()->json($response, 500);
            }

            return response()->json($response);
        }

        return parent::render($request, $e);
    }
}
