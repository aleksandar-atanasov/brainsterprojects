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

    public function edit(Lecture $lecture){

        return view('admin.lectures.edit', [
                    'lecture' => $lecture,
                    'categories' => Category::all()
        ]);
    }

    public function update(LectureRequest $request, Lecture $lecture){

        $data = $request->validated();

        try {
            $lecture->update($data);
            return redirect()->route('lecture.index')->withSuccess('Успешно беше изменета лекцијата со наслов ' . $data['title']);

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Лекцијата не беше успешно изменета']);
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
