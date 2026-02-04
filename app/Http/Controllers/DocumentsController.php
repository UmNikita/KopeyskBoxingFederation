<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function show() {
        $documents = Document::getSortedData();
        return view('pages.documents', ["documents"=>$documents]);
    }
}
