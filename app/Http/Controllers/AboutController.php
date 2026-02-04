<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class AboutController extends Controller
{
    public function show() {
        $staff = Staff::all();
        return view('pages.about', ['staff'=>$staff]);
    }
}
