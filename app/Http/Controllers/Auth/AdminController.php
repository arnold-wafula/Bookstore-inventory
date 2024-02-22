<?php

namespace App\Http\Controllers\Auth;

use App\Models\Roles;
use App\Models\Countries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index() {
        $countries = Countries::all();
        $roles = Roles::all();

        return view('admin', compact('countries', 'roles'));
    }
}
