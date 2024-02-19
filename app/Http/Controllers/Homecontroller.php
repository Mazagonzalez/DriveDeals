<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Homecontroller extends Controller
{
    public function render()
    {
        return view('main');
    }
}
