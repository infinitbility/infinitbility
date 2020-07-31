<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Login page
     *
     * @param  void
     * @return View
     */
    public function index()
    {

        $veriables = null;
        $viewName = 'admin.auth.login';
        return view('admin.layout.app', compact('viewName', 'veriables'));
    }

    /**
     * authenticate user
     * 
     * @param Illuminate\Http\Request;
     * @return View
     */
    public function authenticate(Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin/dashboard');
        }else{
            return redirect()->back()->with('danger', 'please check your credentials');
        }
    }

    /**
     * Logout user
     * 
     * @param Illuminate\Http\Request;
     * @return View
     */
    public function logout(Request $request)
    {
        # auth logout
        Auth::logout();

        return redirect('admin')->with('success', 'Thank You for visit');
    }
}