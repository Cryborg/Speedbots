<?php

namespace App\Bases;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ControllerBase extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Auth User.
     *
     * @var \App\Models\User
     */
    protected $authUser;

    /**
     * ControllerBase constructor.
     */
    public function __construct()
    {
        // FIXME: only when testing !!
        Auth::login(User::find(2), true);

        $this->middleware(function ($request, $next) {
            $this->authUser = Auth::user();
            View::share('authUser', $this->authUser);
            return $next($request);
        });
    }
}
