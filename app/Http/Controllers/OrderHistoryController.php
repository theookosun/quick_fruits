<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderHistory;
use Auth;
use App\User;
class OrderHistoryController extends Controller
{
    protected function create()
    {
       
    }
    public function UpdateOrders(UpdateOrders $request)
    {
        $formData = $request->all();
        $ordername= $formData['light_fruit'];
        $amount = $formData['fname'];
       
        /**
         * Updating the user's contact details if they already exist,
         * and if they don't we create the contact details.
        */
        

    

    }
}
