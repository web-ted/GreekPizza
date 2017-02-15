<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname'    => 'required|max:255',
            'lastname'     => 'required|max:255',
            'phone'        => 'required|max:15',
            'mobile_phone' => 'max:15',
            'email'        => 'required|email|max:255|unique:users',
            'password'     => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name'     => $data['firstname'] . ' ' . $data['lastname'],
            'email'    => $data['email'],
            'role'     => 'customer',
            'password' => bcrypt($data['password']),
            'role'     => 'customer',
        ]);

        Customer::create([
            'firstname'    => $data['firstname'],
            'lastname'     => $data['lastname'],
            'phone'        => $data['phone'],
            'mobile_phone' => $data['mobile_phone'],
            'nickname'     => $data['nickname'],
            'address'      => $data['address'],
            'city'         => $data['city'],
            'region'       => $data['region'],
            'postalcode'   => $data['postalcode'],
            'country'      => $data['country'],
            'user_id'      => $user->id,
        ]);

        return $user;
    }
}
