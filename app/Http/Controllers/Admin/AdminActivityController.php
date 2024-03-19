<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImagesTrait;
use App\Models\Activity;
use Illuminate\Http\Request;


class AdminActivityController extends Controller
{
    use ImagesTrait;

    public function index(){
        $activities = Activity::get();
        return view('Admin.activity.activity', compact('activities'));
    }

    public function create()
    {
        return view('Admin.activity.create');
    }

    public function store(Request $request)
    {
        $fileName = time() . '_Activity.png';

        $this->uploadImage($request->icon, $fileName, 'activity');

        Activity::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'icon' => $fileName
        ]);

//        Alert::success('Success', 'Activity Was Created !');
        return redirect(route('admin.activity.index'));

    }

    public function delete(Request $request){
//        dd($request);
        $Activity = Activity::find($request->activity_id);
        unlink(public_path($Activity->icon));
        $Activity->delete();
        return redirect()->back();

    }

    public function edit($activityId){

        $activity = Activity::find($activityId);

        return view('Admin.activity.edit', compact('activity'));

    }

    public function update(Request $request)
    {
        $fileName = time() . '_Activity.png';
        $activity = Activity::find($request->activity_id);
        $oldfile = $activity->icon;
        $this->uploadImage($request->icon, $fileName, 'Activity', $oldfile);

        $activity->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'icon' => $fileName
        ]);

        return redirect(route('admin.activity.index'));

    }
}
