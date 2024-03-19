<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\HomeInterface;
use App\Models\Activity;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Slider;
use App\Models\Teacher;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public $interface;

    public function __construct(HomeInterface $interface)
    {
        $this->interface = $interface;
    }

    public function index()
    {
       $this->interface->index();
    }

    public function store(Request $request)
    {
//        dd('cc');
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return redirect()->back();

    }
}
