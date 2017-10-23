<?php

namespace Tests\Feature;

use App\Events\NewUserCreated;
use Illuminate\Support\Facades\Event;
use App\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


/**
 * Class AuthenticationTest
 *
 * This Test class tests the entire authentication process for this application.
 * It includes testing registering and logging-in via various social authentication providers, and the default authentication system implemented by laravel
 *
 * @todo Implement the functionality for all the methods in this test class.
 * @author Omadoye Abraham <omadoyeabraham@gmail.com>
 * @since v1.0.0
 * @package Tests\Feature
 */
class AuthenticationTest extends TestCase
{

    /** @test */
    public function a_user_can_register_using_default_authentication()
    {

    }

    /** @test */
    public function a_user_can_register_using_facebook()
    {

    }

    /** @test */
    public function a_user_can_register_using_google()
    {

    }

    /** @test */
    public function a_user_can_login_using_default_authentication()
    {

    }

    /** @test */
    public function a_user_can_login_using_facebook()
    {

    }

    /** @test */
    public function a_user_can_login_using_google()
    {

    }

    /** @test */
    public function multiple_accounts_cannot_have_the_same_email_address()
    {

    }

    /** @test */
    public function the_newUserCreated_event_is_fired_when_a_new_user_registers()
    {
        Event::fake();

        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
                          ->get('/');

        Event::assertDispatched(NewUserCreated::class, function($event) use ($user){

            return $event->user->id === $user->id;
        });

    }


}
