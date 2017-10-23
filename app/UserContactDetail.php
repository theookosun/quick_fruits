<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserContactDetail extends Model
{

    /**
     * The attributes that should be guarded from mass-assignment
     * @var array
     */
     protected $fillable =[ 'phone_number', 'delivery_address'];
    

    public function user(){
        $this->belongsTo(User::class);
    }
}
