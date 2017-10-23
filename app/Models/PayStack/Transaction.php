<?php


namespace App\Models\PayStack;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaystackTransaction
 *
 * This model represents the paystack transaction entity.
 *
 * When users subscribe to a plan created by us on the paystack platform, paystack sends us a reference code.
 * Each instance of this model stores the user_id and reference code of a transaction that that user has performed.
 *
 * @package App\Models
 */
class PaystackTransaction extends Model
{
    
}
