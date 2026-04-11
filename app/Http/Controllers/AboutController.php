<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Contact;

class AboutController extends Controller
{
    public function show() {
        $contacts = Contact::all();
        $staff = Staff::all();
        return view('pages.about', ['staff'=>$staff, 'contacts'=>$contacts]);
    }
}
