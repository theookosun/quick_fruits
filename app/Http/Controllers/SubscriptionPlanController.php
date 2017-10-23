<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\SubscriptionPlan;

use Illuminate\Http\Request;

class SubscriptionPlanController extends Controller
{


    /**
     * Allows the authenticated user subscribe to a plan
     *
     * @param SubscriptionPlan $plan
     */
    /*public function subscribe(SubscriptionPlan $plan)
    {
        $plan->subscribe();
    }*/

    /**
     * Displays the page where users can subscribe to a fruit package
     *
     * @return Response
     */
    public function showSubscriptionPage()
    {
        return view('pages.subscription.subscribe');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $activePlans = $this->userPlan->activePlans()->toArray();
        $inactivePlans = $this->userPlan->inactivePlans()->toArray();
        $allPlans = array_merge($activePlans, $inactivePlans);

        return $allPlans;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubscriptionPlan  $subscriptionPlan
     * @return \Illuminate\Http\Response
     */
    public function show(SubscriptionPlan $subscriptionPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubscriptionPlan  $subscriptionPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(SubscriptionPlan $subscriptionPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubscriptionPlan  $subscriptionPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubscriptionPlan $subscriptionPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubscriptionPlan  $subscriptionPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubscriptionPlan $subscriptionPlan)
    {
        //
    }
}
