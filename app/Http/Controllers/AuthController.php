<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    
    public function showUserRegisterForm()
    {
        return view('auth.user.register');
    }
    
    // public function userRegistrationProses(Request $request)
    // {
    //     $request->validate([
    //         'email'     => 'required|email|string',
    //         'password'  => 'required|string',
    //     ]);
    // }
    
    public function showUserLoginForm()
    {
        return view('auth.user.login');
    }

    public function userLoginProses(Request $requst)
    {
        $request->validate([
            'email'     => 'required|email|string',
            'password'  => 'required|string',
        ]);

        if (!Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return back()->withErrors([
                'email'     => 'Email yang Anda masukkan salah',
                'password'  => 'Password yang Anda masukkan salah',
            ]);
        }
        return redirect()->intended(route('user.index'));
    }

    public function logoutUser(Request $request)
    {
        Auth::guard('user')->logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken();
    
        return redirect()->route('admin.login');
    }

    public function showStaffLoginForm()
    {
        return view('auth.staff.login');
    }

    public function staffLoginProses(Request $request)
    {
        $request->validate([
            'username'  =>  'required|string',
            'password'  =>  'required|string',
        ]);

        if (!Auth::guard('staff')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return back()->withErrors([
                'username' => 'Username yang Anda masukan salah',
                'password' => 'Password yang Anda masukan salah',
            ]);
        }

        return redirect()->intended(route('staff.index'));
    }

    public function logoutStaff(Request $request)
    {
        Auth::guard('staff')->logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken();
    
        return redirect()->route('staff.login');
    }

    public function showSuperAdminLoginForm()
    {
        return view('auth.superadmin.login');
    }

    public function superAdminLoginProses(Request $request)
    {
        $request->validate([
            'username'  =>  'required|string',
            'password'  =>  'required|string',
        ]);

        if (!Auth::guard('superadmin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return back()->withErrors([
                'username' => 'Username yang Anda masukan salah',
                'password' => 'Password yang Anda masukan salah',
            ]);
        }

        return redirect()->intended(route('suoeradmin.index'));
    }

    public function logoutSuperAdmin(Request $request)
    {
        Auth::guard('superadmin')->logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken();
    
        return redirect()->route('superadmin.login');
    }
}
