<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use AuthenticatesUsers;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginAdminController extends Controller
{

    public function home()
    {
        return view('admin.login_admin');
    }

    public function login_admin()
    {
        // $data['$title'] = 'Login';
        // return view('user/login', $data);
        return view('admin.Login_admin', [
            'title' => 'Login_admin',
        ]);
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/homedashboard2023');
        }
        return back()->with('loginError', 'Login failed');

        // $paketInternets = paketInternet::all();
        // return view('user.index', compact('paketInternets'));
    }

    public function register_admin()
    {
        $data['$title'] = 'Register';
        return view('admin.Register_admin', $data);
    }

    public function registeradmin_action(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $admin = new Admin([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
        $admin->save();
        return redirect()->route('login_admin')->with('success', 'Registration Success. Please Login!');
    }

    public function logout_admin(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login_admin')->with('success', 'berhasil logout');
    }
}
