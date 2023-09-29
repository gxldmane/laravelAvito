<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     *
     */
    public function index()
    {
        $this->authorize('view', auth()->user());
        if(auth()->user()->role === 'seller') {
            return view('home');
        }
        return redirect(route('admin.main.index'));
    }
}
