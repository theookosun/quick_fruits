<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class HomePageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // Calling the parent constructor, so $userPlan, and $subscriptionPlan variables are set.
        parent::__construct();
    }

    /**
     * Show the application's homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Get the following:
         *     + If the user has filled their contact details
         *     + Number of Active Subscriptions
         *     + Number of Upcoming Renewals
         *     + Next Delivery time (in days)
         */
        $numberOfActivePlans = count($this->userPlan->activePlans()->toArray());

        $userHasContactDetails = (bool) $this->user->contactDetails;

        return view('pages.homepage', [
            'numberOfActivePlans' => $numberOfActivePlans,
            'userHasContactDetails' => $userHasContactDetails
        ]);
    }

    public function index_old()
    {
        return view('');
    }
}
