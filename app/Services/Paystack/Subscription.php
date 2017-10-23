<?php


namespace App\Services\Paystack;

use GuzzleHttp\Psr7\Request as guzzleRequest;
use GuzzleHttp\Exception\ClientException;

use App\Services\PaymentProvider\SubscriptionInterface as PaymentProviderSubscriptionInterface;
use App\Services\Paystack\BaseService as BasePaystackService;

/**
 * Class Subscription
 *
 * This class acts as the service layer, interacting with Paystack's api concerning all Subscription related actions
 *
 * @package App\Services\Paystack
 */
class Subscription extends BasePaystackService implements PaymentProviderSubscriptionInterface
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Create a new subscription to a Plan on Paystack
     *
     * @param string $customerCode The unique code used to identify the customer/user on the paystack's platform
     * @param string $planCode The unique code used to identify the plan the user wants to subscribe to
     * @return mixed
     */
    public function subscribeToPlan($customerCode, $planCode)
    {
        $options = $this->basePaystackModel->options;

        $formParams = [
            'customer' => $customerCode,
            'plan' => $planCode
        ];

        $options['json'] = $formParams;
        $options['Content-Type'] = 'application/json';

        try {
            $response = $this->basePaystackModel->guzzleClient->post($this->basePaystackModel->payStackBaseURL . "/subscription", $options);
        } catch (ClientException $e) {
            dd($e->getResponse()->getBody()->getContents());
        }

        $newSubscription = json_decode($response->getBody())->data;
        dd($newSubscription);

    }

}