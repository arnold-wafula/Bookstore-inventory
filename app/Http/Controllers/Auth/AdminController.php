<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\Country;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index() {
        $countries = Country::all();
        $roles = Role::all();

        return view('admin', compact('countries', 'roles'));
    }

    public function store() {
        $user = new User();

        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->address = request('address');
        $user->country = request('country');
        $user->role = request('role');

        $user->password = request('password');

        $user->save();

        return redirect()->route('login');
    }
}
