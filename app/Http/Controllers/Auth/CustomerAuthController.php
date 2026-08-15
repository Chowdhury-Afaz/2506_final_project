<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Socialite;

class CustomerAuthController extends Controller
{

    use AuthenticatesUsers, RegistersUsers;

    // where to redirect users after login / registration.
    protected $redirectTo = '/user/dashboard';


    function showLoginForm()
    {
        return view('auth.customer.login');
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }



    function showRegistrationForm()
    {
        return view('auth.customer.register');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => 'required|unique:customers,phone',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @return Customer
     */
    protected function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    function googleRedirect()
    {

        return Socialite::driver('google')->redirect();
    }

    function googleCallback()
    {

        $user = Socialite::driver('google')->user();

        // Customer Craete
        $customer = Customer::updateOrCreate([
            'email' => $user->email,
        ],[
            'name' => $user->name,
            'email' => $user->email,
            'image' => $user->avatar,
            'password' => Hash::make(uniqid())
        ]);
        
        // Customer Login Session
        Auth::guard('customer')->login($customer); // -> admin => guard -> customer
        return to_route('user.dashboard');

    }
}
