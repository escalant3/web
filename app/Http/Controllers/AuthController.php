<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate(Request $request)
    {
        $v = Validator::make($request->all(), [
            'email'    => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        if ($v->fails()) {
            flash('Los datos introducidos no son correctos.', 'error');

            return redirect()->back()->withErrors($v);
        }

        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            return redirect()->intended('admin');
        }

        flash('Los datos introducidos no son correctos.', 'error');

        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
