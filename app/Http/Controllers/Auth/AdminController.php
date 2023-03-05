<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function homme()
    {
        return view('homedashboard');
    }
    public function login_admin()
    {

        return view('admin.Login_admin', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/homedashboard');
        }
        return back()->with('loginError', 'Login failed');
    }
    //=================================================================================================

    //fungsi register==================================================================================
    public function admin_register()
    {
        $data['$title'] = 'Register';
        return view('admin.Register_admin', $data);
    }

    public function admin_register_action(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = new Admin([
            'nama ' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
        $user->save();
        return redirect()->route('admin/Login_admin')->with('success', 'Registration Success. Please Login!');
    }
    //===========================================================================================================

    //fungsi logout=========================================================================================
    public function admin_logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'berhasil logout');
    }
}
