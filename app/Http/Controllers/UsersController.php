<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function store(UserRequest $request){

        $data = $request->validated();
        try {

            $user = User::create($data);

        if($request->has('category')){
            $user->categories()->attach(request('category'));
        }
            return redirect()->route('home')->withSuccess('Успешно се пријавивте');

        } catch (Exception $e) {

            return redirect()->back()->withErrors(['error' => 'Грешка: Вашата регистрација не беше успешна.']);
        }
    }
}
