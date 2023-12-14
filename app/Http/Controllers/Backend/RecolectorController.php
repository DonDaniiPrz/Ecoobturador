<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecolectorController extends Controller
{
    public function dashboard() {
        return view ('recolector.dashboard');
    }
}
