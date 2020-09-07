<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(Request $request){

        try {
            $user = User::create(request()->validate([
            'email' => 'required|email|unique:users',
        ]));

        if($request->has('category')){
            $user->categories()->attach(request('category'));
        }
            return redirect()->route('home')->withSuccess('Успешно се пријавивте');

        } catch (Exception $e) {

            return redirect()->back()->withErrors(['error' => 'Грешка: Вашата регистрација не беше успешна.']);
        }
    }
}
