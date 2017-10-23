<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Models\SubscriptionPlan;
use App\Models\UserPlan;
use App\User;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * The authenticated User
     *
     * @var 'App\User'
     */
    public $user;

    /**
     * The userPlan model, which links users and the various subscription plans they have
     *
     * @var UserPlan
     */
    public $userPlan;

    /**
     * The subscriptionPlan model
     *
     * @var SubscriptionPlan
     */
    public $subscriptionPlan;

    /**
     * Controller constructor.
     *
     * @param $userPlan
     * @param $subscriptionPlan
     */
    public function __construct( )
    {
        /**
         * Middleware is run here, because from Laravel 5.3 upwards, Auth and Session cannot be directly run from a controller constructor.
         * This is because Auth and Session rely on a http request, and since the middleware runs before the request, the constructor cannot access them.
         *
         * @link https://github.com/laravel/framework/issues/15072  <Github Issue where Taylor Otwell addresses this>
         */
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            $this->userPlan = new UserPlan;
            $this->subscriptionPlan = new SubscriptionPlan;

            return $next($request);
        });

    }
}
