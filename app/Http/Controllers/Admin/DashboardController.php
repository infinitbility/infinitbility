<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * dashbord page
     *
     * @param  void
     * @return View
     */
    public function dashboard()
    {

        # post list
        $userId = Auth::id();
        $posts = Posts::where('user_id', $userId)->where('status', 'Y')->get();

        $veriables = 'posts';
        $viewName = 'admin.dashboard.dashboard';

        return view('admin.layout.app', compact('viewName', 'posts', 'veriables'));
    }
}