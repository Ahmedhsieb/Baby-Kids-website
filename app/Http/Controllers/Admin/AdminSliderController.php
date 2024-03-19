<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\AddSliderRequest;
use App\Http\Requests\Slider\DeleteSlider;
use App\Http\Requests\Slider\UpdateSlider;
use App\Http\Traits\ImagesTrait;
use App\Models\Slider;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSliderController extends Controller
{
    use ImagesTrait;

    public function index(){
        $sliders = Slider::get();
        return view('Admin.slider.slider', compact('sliders'));
    }

    public function create()
    {
      return view('Admin.slider.create');
    }

    public function store(AddSliderRequest $request)
    {
        $fileOriginalName = $request->image->getClientOriginalName();
        $fileInfo = explode('/', $request->image->getClientMimeType());
        $fileType = $fileInfo[0];
        $fileExt = $fileInfo[1];

        $fileName = time() . '_slider.'.$fileExt;

        $this->uploadImage($request->image, $fileName, 'slider');

        Slider::create([
            'image' => $fileName
        ]);

//        Alert::success('Success', 'Slider Was Created !');
        return redirect(route('admin.slider.index'));

    }

    public function delete(DeleteSlider $request){
//        dd($request);
        $slider = Slider::find($request->slider_id);
        unlink(public_path($slider->image));
        $slider->delete();
        return redirect()->back();

    }

    public function edit($sliderId){

        $slider = Slider::find($sliderId);

        return view('Admin.slider.edit', compact('slider'));

    }

    public function update(UpdateSlider $request)
    {
        $fileName = time() . '_slider.png';
        $slider = Slider::find($request->slider_id);
        $oldfile = $slider->image;
        $this->uploadImage($request->image, $fileName, 'slider', $oldfile);

        $slider->update([
            'image' => $fileName
        ]);

        return redirect(route('admin.slider.index'));

    }
}
