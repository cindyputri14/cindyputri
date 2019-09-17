<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CleanerController extends Controller
{
    public function cleaner() {
        return view('tables');
    }
}
