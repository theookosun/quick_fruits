<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateContactDetails;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserContactDetail;

class UserController extends Controller
{

    /**
     * Update the contact details for the authenticated user.
     *
     * The UpdateContactDetails class is the formRequest class used for validation,
     * so we are certain that the request being passed into the controller has been properly validated
     *
     * @param UpdateContactDetails $request
     */
    public function updateContactDetails(UpdateContactDetails $request)
    {
        $formData = $request->all();
        $phoneNumber = $formData['phone_number'];
        $contactAddress = $formData['contact_address'];
        /**
         * Updating the user's contact details if they already exist,
         * and if they don't we create the contact details.
        */
        $contactDetails = UserContactDetail::firstOrNew([
            'user_id' => Auth::user()->id
        ]);

        $contactDetails->phone_number = $phoneNumber;
        $contactDetails->delivery_address = $contactAddress;

        $contactDetails->save();

        return redirect()->back();

    }

}
