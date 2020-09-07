<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Lecture;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;

class BannerController extends Controller
{
    public function index(){

        return view('admin.banners.index',['banners' => Banner::latest()->paginate(5)]);
    }

    public function store(BannerRequest $request){

        $data = $request->validated();

        try {

           Banner::create($data);
           return redirect()->route('banner.index')->withSuccess('Успешно беше додаден банер со наслов '. $data['title']);

        } catch (\Throwable $th) {

            return redirect()->back()->withErrors(['error' => 'Банерот не беше успешно додаден!']);
        }

    }

    public function edit(Banner $banner){

        return view('admin.banners.edit', compact('banner'));
    }

    public function update(BannerRequest $request, Banner $banner){

        $data = $request->validated();

        try {
            $banner->update($data);
            return redirect()->route('banner.index')->withSuccess('Успешно беше изменет банерот со наслов '. $data['title']);
        } catch (\Throwable $th) {

            return redirect()->back()->withErrors(['error' => 'Банерот не беше успешно изменет!']);
        }
    }

    public function destroy(Banner $banner){

        try {
            $banner->delete();
            return redirect()->route('banner.index')->withSuccess('Успешно беше избришан банерот!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Банерот не беше успешно избришан!']);
        }
    }
}
