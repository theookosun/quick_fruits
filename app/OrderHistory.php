<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    //
    protected $fillable =[ 'user_id','order_name', 'expiry_date', 'amount'];
    

    public function user(){
        $this->belongsTo(User::class);
    }
}
