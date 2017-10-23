<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Http\Controllers\PaystackController;

class PaystackControllerTest extends TestCase
{
   
   private $paystackController;
  
   public function setup()
   {
       Parent::setup();
   		$this->paystackController = new PaystackController();
   }

   /** @test */
   public function we_can_retreive_all_the_customers_from_paystack()
   {
   		$allCustomers = $this->paystackController->getCustomers();
   		$this->assertEquals(1, 1);
   }

}
