<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnersController extends Controller
{
    public function show() {
        $partners = Partner::all();
        return view('pages.partners', ["partners"=>$partners]);
    }
}
