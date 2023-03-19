<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Tool;
use App\Models\User;
use App\Models\Email;
use App\Models\Design;
use App\Models\Header;
use App\Models\Number;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\DesignCategory;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
}
