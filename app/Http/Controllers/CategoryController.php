<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index(Category $category){

        $categories = $category->select('id','label','name','image')->paginate(4);
        return view('admin.categories.categories', compact('categories'));
    }

    public function show(Category $category){

        return view('category', ['category' => $category,
                                 'banners' => Banner::latest()->paginate(5)
                                 ]);
    }

    public function store(CategoryRequest $request){

        $data = $request->validated();
        $data['image'] = $request->image->store('uploads/images', 'public');

        try {
            Category::create($data);
            return redirect()->route('category.index')->withSuccess('Успешно беше додадена категоријата со име ' . $data['name']);
        } catch (\Throwable $th) {

            return redirect()->back()->withErrors(['error' => 'Категоријата не беше успешно додадена']);
        }
    }

    public function edit(Category $category){

        return view('admin.categories.edit',['category' => $category]);
    }

    public function update(Request $request, Category $category){

        $data = $request->validate([
            'description' => 'required|max:400',
            'image' => 'file|image|size:5000|mimes:jpeg, svg, png',
        ]);
        if(request()->hasFile('image')){
            $data['image'] = $request->image->store('uploads/images', 'public');
        }

        try {
           $category->update($data);
           return redirect()->route('category.index')->withSuccess('Успешно беше изменета категоријата '. $category->name);
        } catch (\Throwable $th) {

            return redirect()->back()->withErrors(['error' => 'Категоријата не беше успешно изменета!']);
        }
    }
}
