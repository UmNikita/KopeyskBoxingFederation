<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class CoachesController extends Controller
{
    public function show() {
        $coaches = Coach::all();
        return view('pages.coaches', ["coaches"=>$coaches]);
    }
}
