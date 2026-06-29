<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HelpController extends Controller
{
    function index(){
        return view('backend.help');
    }
}
