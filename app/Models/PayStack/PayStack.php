<?php

namespace App\Models\PayStack;
use Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as guzzleRequest;
use App\Models\PaystackTransaction;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayStack
 *
 * The base paystack model which other paystack related models extend
 *
 * This class will setup whatever paystack specific code we need across all/most paystack related classes.
 *
 * @package App\Models\PayStack
 */
class PayStack extends Model
{

    /**
     * The base API URL for paystack api calls
     *
     * @var string
     */
    public $payStackBaseURL;

    /**
     * The secret Key provided by PayStack to be used for authentication
     *
     * @var String
     */
    public $secretKey;

    /**
     * The Guzzle Http Client
     *
     * @var 'App\GuzzleHttp\Client'
     */
    public $guzzleClient;

    /**
     * Data to be sent along with requests to the Paystack API.
     * Includes headers and Form data where applicable
     *
     * @var Array
     */
    public $options;

    /**
     * PayStack constructor.
     */
    public function __construct()
    {
        $this->payStackBaseURL = config("paystack.paymentUrl") ?: "https://api.paystack.co";
        $this->secretKey = config("paystack.secretKey");

        // Guzzle HTTP Client
        $this->guzzleClient = new Client([
            'base_uri' => $this->payStackBaseURL,
        ]);

        /**
         *  Setting the headers to be sent alongside requests to the Paystack API
         *  Additional headers can be added by Classes that extend this base Paystack class by adding new keys to $this->options['headers']
         */
        $this->options['headers'] = [
            'Authorization' => "Bearer " . $this->secretKey
        ];


    }

}
