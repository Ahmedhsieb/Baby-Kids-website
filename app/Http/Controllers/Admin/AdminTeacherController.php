<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImagesTrait;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    use ImagesTrait;

    public function index(){
        $teachers = Teacher::with('course')->get();
        return view('Admin.teacher.teacher', compact('teachers'));
    }

    public function create()
    {
        $courses = Course::get();
        return view('Admin.teacher.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $fileInfo = explode('/', $request->image->getClientMimeType());
        $fileType = $fileInfo[0];
        $fileExt = $fileInfo[1];

        $fileName = time() . '_slider.'.$fileExt;

        $this->uploadImage($request->image, $fileName, 'teacher');

        Teacher::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $fileName,
            'course_id' => $request->course_id
        ]);

//        Alert::success('Success', 'Teacher Was Created !');
        return redirect(route('admin.teacher.index'));

    }

    public function delete(Request $request){
        $Teacher = Teacher::find($request->teacher_id);
        unlink(public_path($Teacher->image));
        $Teacher->delete();
        return redirect()->back();

    }

    public function edit($teacherId){

        $teacher = Teacher::find($teacherId);

        $courses = Course::get();

        return view('Admin.teacher.edit', compact('teacher', 'courses'));

    }

    public function update(Request $request)
    {
        $teacher = Teacher::find($request->teacher_id);

        if (!is_null($request->image)){
            $fileName =  time() . '_slider.'.$request->image->extension();
            $this->uploadImage($request->image, $fileName, 'teacher', $teacher->image);
        }

        //$teacher->image  ==>  images/teacher/1695592167_slider.png we need to explode it
        $oldFileName = explode('/', $teacher->image);
        $oldFileName = $oldFileName[2];

        $teacher->update([
            'name' => $request->name,
            'description' => $request->description,
            'course_id' =>$request->course_id,
            'image' => (isset($fileName)) ? $fileName : $oldFileName
        ]);

        return redirect(route('admin.teacher.index'));

    }
}
