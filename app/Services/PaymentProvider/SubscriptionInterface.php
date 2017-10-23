<?php

namespace App\Services\PaymentProvider;


/**
 * Interface SubscriptionInterface
 *
 * This is the interface that defines the contract that all Payment Providers must implement
 *
 * @package App\Services\PaymentProvider
 */
interface SubscriptionInterface
{

    /**
     * Subscribe to a plan on the Payment Provider's platform
     *
     * @param string $customerCode The unique code used to identify the customer/user on the pament providers platform
     * @param String $planCode The unique code used to identify the plan the user wants to subscribe to
     * @return mixed
     */
    public function subscribeToPlan($customerCode, $planCode);

}