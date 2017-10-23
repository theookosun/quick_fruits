<?php

namespace App;
use App\UserContactDetail;
use App\OrderHistory;
use App\Models\UserPlan;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Defines the relationship between a User and UserPlans
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userPlans()
    {
        // (Class to be related with, The foreign key of this class on the related model, The primary key of this model)
        return $this->hasMany('App\Models\UserPlan', 'user_id', 'id');
    }

    /**
     * Defines the relationship between a User and a paystack Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function payStackCustomer()
    {
        // (Class to be related with, The foreign key of this class on the related model, The primary key of this model)
        return $this->hasOne('App\Models\PayStack\Customer', 'user_id', 'id');
    }

    /**
     * Defines the relationship between a User and UserContact Details
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactDetails()
    {
        // (Class to be related with, The foreign key of this class on the related model, The primary key of this model)
        return $this->hasOne(UserContactDetail::class, 'user_id', 'id');
    }


    /**
     * Defines the relationship between a user and PaystackTransactions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paystackTransactions()
    {
        return $this->hasMany('App\Models\PaystackTransaction', 'user_id', 'id');
    }
    public function orderHistory()
    {
        return $this->hasMany(OrderHistory::class);
    }


}
