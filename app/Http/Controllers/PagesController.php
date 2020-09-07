<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $users = User::where('role_id', '!=', 1)->select('id','email')->latest()->get();
        return view('admin.dashboard', ['users' => $users]);
    }
}
