<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImagesTrait;
use App\Models\Course;
use Illuminate\Http\Request;


class AdminCourseController extends Controller
{
    use ImagesTrait;

    public function index(){
        $courses = Course::get();
        return view('Admin.course.course', compact('courses'));
    }

    public function create()
    {
        return view('Admin.course.create');
    }

    public function store(Request $request)
    {
        $fileName = time() . '_Course.png';

        $this->uploadImage($request->image, $fileName, 'course');

        Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $fileName
        ]);

//        Alert::success('Success', 'Course Was Created !');
        return redirect(route('admin.course.index'));

    }

    public function delete(Request $request){
//        dd($request);
        $Course = Course::find($request->course_id);
        unlink(public_path($Course->image));
        $Course->delete();
        return redirect()->back();

    }

    public function edit($courseId){

        $course = Course::find($courseId);

        return view('Admin.course.edit', compact('course'));

    }

    public function update(Request $request)
    {
        $course = Course::find($request->course_id);
        if (!is_null($request->image)){
            $fileName =  time() . '_slider.'.$request->image->extension();
            $this->uploadImage($request->image, $fileName, 'teacher', $course->image);
        }

        //$teacher->image  ==>  images/teacher/1695592167_slider.png we need to explode it
        $oldFileName = explode('/', $course->image);
        $oldFileName = $oldFileName[2];

        $course->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => (isset($fileName)) ? $fileName : $oldFileName
        ]);

        return redirect(route('admin.course.index'));

    }
}
