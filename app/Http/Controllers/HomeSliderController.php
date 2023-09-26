<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeSliderRequest;
use App\Models\HomeSlider;
use App\Tables\HomeSlider as HomeSliderTable;
use ProtoneMedia\Splade\Facades\Toast;

class HomeSliderController extends Controller
{
    public function index()
    {

        return view('dashboard.homeSlider.home')->with('sliders', HomeSliderTable::class);
    }

    public function store(HomeSliderRequest $request)
    {

        HomeSlider::create([
            'image' => str_replace('public/', 'storage/', $request->file('image')?->store('public/sliderImages')),
            'text_overlay' => $request->text_overlay,
            'text' => $request->text,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'button' => $request->button,
            'status' => $request->status,
        ]);
        Toast::success('Slider Added Successfully');
        return redirect()->route('dashboard.homeSlider.index');
    }

    public function delete(HomeSlider $slider)
    {
        $slider->delete();
        Toast::success('Slider Deleted Successfully');
        return redirect()->route('dashboard.homeSlider.index');
    }

    public function toggle(HomeSlider $slider, $property)
    {
        $slider->$property = !$slider->$property;
        $slider->save();
        Toast::success('Slider Updated Successfully');
        return redirect()->route('dashboard.homeSlider.index');
    }

}
