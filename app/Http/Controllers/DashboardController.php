<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderHistory;

class DashboardController extends Controller
{
    //
    /**
 * Increment a column's value by a given amount.
 *
 * @param  string  $column
 * @param  int     $amount
 * @param  array   $extra
 * @return int
 */
 /*
public function increment($column, $amount = 1, array $extra = array())
{
    $wrapped = $this->grammar->wrap($column);

    $columns = array_merge(array($column => $this->raw("$wrapped + $amount")), $extra);

    return $this->update($columns);
    DB::table('users')->where('id', Auth::user()->id)->increment('position');
}
*/

    public function index()
    {
          $order = OrderHistory::find(3);
            return view('pages.homepage',compact('order'));
    }
    public function subscription(){
        $order = OrderHistory::find(3);
        return view('dashboard.subscriptions',compact('order'));
    }
    public function orders(){
        $order = OrderHistory::all();
        return view('dashboard.order_history',compact('order'));
    }
    public function feedback(){
        return view('dashboard.feedback');
    }
    public function settings(){
        return view('dashboard.settings');
    }
}
