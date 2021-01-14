<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    use AuthenticatesUsers;

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:20'],
            'email' => ['string', 'email', 'max:50', 'unique:users'],
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        return redirect()->route('home');
    }

}
