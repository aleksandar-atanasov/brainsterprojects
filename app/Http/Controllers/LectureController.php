<?php

namespace App\Http\Controllers;

use App\Lecture;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\LectureRequest;

class LectureController extends Controller
{
    public function index(){

        return view('admin.lectures.index',
                    ['categories' => Category::all(),
                     'lectures' => Lecture::latest()->paginate(5)
                    ]);
    }

    public function store(LectureRequest $request){

        $data = $request->validated();

        try {
            Lecture::create($data);
            return redirect()->route('lecture.index')->withSuccess('Успешно беше додадена лекцијата со наслов ' . $data['title']);

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Лекцијата не беше успешно додадена']);
        }
    }

    public function destroy(Lecture $lecture){

        try {
            $lecture->delete();
            return redirect()->route('lecture.index')->withSuccess('Успешно беше избришана лекцијата');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Лекцијата не беше успешно избришана']);
        }
    }
}
