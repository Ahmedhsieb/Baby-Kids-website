<?php

namespace App\Http\Repository;

use App\Http\Interfaces\HomeInterface;
use App\Models\Activity;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Slider;
use App\Models\Teacher;

class HomeRepository implements HomeInterface
{

    public function index()
    {
        $sliders = Slider::get();
        $courses = Course::get();
        $activities = Activity::get();
        $faqs = Faq::get();
        $teachers = Teacher::with('course')->get();

        return view('index',
            compact('sliders', 'courses', 'activities', 'teachers', 'faqs')
        );
    }
}
