<?php

namespace App\Services\Paystack;

use App\Models\PayStack\PayStack as BasePaystackModel;

/**
 * Class BaseService
 *
 * This is the service class that all other Paystack specific services extend.
 * It uses composition to associate with the BasePaystackModel that other Paystack specific models extend.
 * The BasePaystackModel provides access to the Base paystack API URI, and the authorization header.
 *
 * @package App\Services\Paystack
 */

class BaseService
{

    /**
     * @var BasePaystackModel
     */
    public $basePaystackModel;

    /**
     * BaseService constructor.
     *
     */
    public function __construct()
    {
        $this->basePaystackModel = new BasePaystackModel();
    }

}