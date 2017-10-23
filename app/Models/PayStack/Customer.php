<?php

namespace App\Models\PayStack;

use App\User;

use Illuminate\Database\Eloquent\Model;

use GuzzleHttp\Psr7\Request as guzzleRequest;
use GuzzleHttp\Exception\ClientException;

/**
 * Class Customer
 *
 * This model represents a Paystack customer
 *
 * @package App\Models\PayStack
 */
class Customer extends PayStack
{

    /**
     * An array of attributes that are not mass-assignable
     *
     * @var array
     */
    protected $guarded = [];

    protected $fillable = ["customer_id"];

    /**
     * Customer constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Creates a new Paystack customer when a user registers on the quick-fruits application.
     *
     * @param User $user
     * @return mixed
     */
    public function createPayStackCustomer(User $user)
    {
        $email = $user->email;

        $formParams = [
            'email' => $email
        ];

        $this->options['json'] = $formParams;
        $this->options['Content-Type'] = 'application/json';

        try {
            $response = $this->guzzleClient->post($this->payStackBaseURL . "/customer", $this->options);
        } catch (ClientException $e) {
            dd($e->getResponse()->getBody()->getContents());
        }

        $newCustomer = json_decode($response->getBody())->data;

        $paystackCustomer = Customer::where('customer_code', '=', $newCustomer->customer_code)->first();

        if($paystackCustomer)
        {
            return $paystackCustomer;
        }

        $paystackCustomer = new Customer();

        $paystackCustomer->customer_id = $newCustomer->id;
        $paystackCustomer->user_id = $user->id;
        $paystackCustomer->customer_code = $newCustomer->customer_code;
        $paystackCustomer->integration = $newCustomer->integration;
        $paystackCustomer->domain = $newCustomer->domain;

        $paystackCustomer->save();


        return $paystackCustomer;


    }

}
