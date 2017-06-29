<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::guard()->id();
        $user = User::find($user_id);

        if ($user->role == 1) {
            return redirect()->route('category.index');
        } else {
            return redirect()->route('homepage');
        }
    }


    public function homepage()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        
        return view('sites.pages.home', compact('products'));
    }
}
