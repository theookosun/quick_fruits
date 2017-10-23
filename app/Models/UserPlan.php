<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\User;


/**
 * Class UserPlan
 * @package App\Models
 *
 * This class is a model representing the 'user_plan' in the database.
 * It is a pivot model, linking USERS and the SUBSCRIPTIONPLANS they subscribe to.
 *
 * @author Omadoye Abraham <omadoyeabraham@gmail.com>
 */
class UserPlan extends Model
{

    /**
     * Returns the active plans that a user is subscribed to
     */
    public function activePlans()
    {
        return $this->getPlans('active');
    }


    /**
     * Returns the inactive plans that a user is subscribed to
     */
    public function inactivePlans()
    {
        return $this->getPlans('inactive');
    }


    /**
     * Returns the plans that a user is subscribed to.
     *
     * @param String $status  The status of the plans we require. Could be active or inactive
     */
    private function getPlans( $status = 'active')
    {
        return Auth::user()->userPlans()->where('status', '=', $status)->get();
    }


}
