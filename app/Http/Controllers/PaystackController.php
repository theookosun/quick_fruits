<?php

namespace App\Http\Controllers;

use App\Models\PayStack\PaystackTransaction as PaystackTransaction;
use App\Services\Paystack\Subscription as PaystackSubscriptionService;
use Illuminate\Http\Request;

use Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as guzzleRequest; 

class PaystackController extends Controller
{

    /**
     * The paystackSubscriptionService instance used to carry out subscription transactions
     *
     * @var 'App\Services\Paystack\subscription'
     */
    private $paystackSubscriptionService;

    /**
     * PaystackController constructor.
     *
     * @param $paystackSubscriptionService
     */
    public function __construct()
    {
        $this->paystackSubscriptionService = new PaystackSubscriptionService();
    }


    /**
	 * Get all customers registered with Paystack
	 * 
	 * @return Array Of Objects
	 */
    public function getCustomers()
    {
    	$request = new guzzleRequest('GET', 'customer', $this->options['headers']);
    	$response = $this->guzzleClient->send($request);

    	$allCustomers = json_decode($response->getBody());
    	return $allCustomers->data;		
    }



    /**
     * Handle the response sent by Paystack once a user successfully subscribes to a plan
     *
     * This method is called when a user successfully subscribes to a payment plan on paystack.
     * Paystack sends a response to a URL specified by us when creating the subscription page via Paystack's dashboard.
     * The response sent contains a query param called reference
     * 
     * @param  Request $request [description]
     * @return Response
     */
    public function handleSubscriptionCallback(Request $request)
    {
        $referenceCode = $request->input('reference') ?: null;

        if (isset($referenceCode))
        {
            $paystackTransaction = new PaystackTransaction();

            $paystackTransaction->user_id = Auth::user()->id;
            $paystackTransaction->transaction_code = $referenceCode;

            $paystackTransaction->save();
            return view('welcome');
       }

        $allPaystackTransactions = PaystackTransaction::all();
        dd($allPaystackTransactions);

    }

    /**
     * Handles the action for a user subscribing to plan via paystack.
     *
     * @param Request $request
     */
    public function subscribeToPlan(Request $request)
    {

        $planCode = $request->input('plan_code') ?: "no_plan_code_given";
        $customerCode = Auth::user()->payStackCustomer->customer_code ?: "no_customer_code_available";

        $this->paystackSubscriptionService->subscribeToPlan($customerCode, $planCode);
    }

}
