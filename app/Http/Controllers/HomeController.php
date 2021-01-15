<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function settings()
    {
        return view('settings.index');
    }

    public function password_change(Request $request)
    {
           $validatedData = $request->validate([
        'password' => 'required|min:6|confirmed',
            ]);
        $update_password=User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        if ($update_password) {
               return redirect()->back()->with('success', 'Password has been updated successfully');

        }else{
                return redirect()->back()->with('errors', 'Please try again after sometime!');

        }

    }
}
