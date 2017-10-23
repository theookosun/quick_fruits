<?php

namespace App\Http\Controllers;
use App\UserContactDetail;
use Illuminate\Http\Request;
use Alert;
use Auth;
use App\OrderHistory;
use Carbon\Carbon;

class ProductPageController extends Controller
{
        public function productone()
    {
        return view('products.light-fruit-salad');
    }
    public function producttwo()
    {
        return view('products.pro-fruit-salad');
    }
    public function ondemand()
    {
        return view('products.on-demand');
    }
   
    public function checkoutt(Request $request)
    {
        
        $expirydate = Carbon::now()->addMonths(2);;
        $userid = Auth::user()->id;
        $orderdetails= OrderHistory::create([
            'order_name' => $request['light_fruit'],
            'amount' => $request['fname'],
            'expiry_date'=> $expirydate,
            'user_id'=> $userid,
            
        ]);
            $orderdetails->save();
        $formData=$request->all();

        $user_details = UserContactDetail::all();
        return view('products.checkout', compact('user_details', 'formData'));
    }
    
}
