<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('admin.dashboard', ['users' => User::select('id','email')->latest()->get()]);
    }

    public function categories(){
        return view('admin.categories.categories');
    }
}
