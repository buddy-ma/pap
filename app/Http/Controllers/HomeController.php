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

    public function contact()
    {
        return view('contact');
    }

    public function community()
    {
        return view('community');
    }

    // public function art()
    // {
    //     $user = User::where('id', $this->user)->first();
    //     $header = Header::where('is_order', 0)->first();
    //     $services = Service::where('status', 1)->get()->take(3);
    //     $numbers = Number::where('status', 1)->get()->take(4);
    //     $cats = DesignCategory::where('status', 1)->get()->take(4);
    //     $designs = Design::where('status', 1)->orderby('sort')->get();
    //     $plans = Plan::where('status', 1)->get();
    //     $tools = Tool::where('category', 2)->take(4);

    //     return view('art')->with([
    //         'page' => 'art',
    //         'user' => $user,
    //         'cats' => $cats,
    //         'designs' => $designs,
    //         'tools' => $tools,
    //         'header' => $header,
    //         'services' => $services,
    //         'numbers' => $numbers,
    //         'plans' => $plans
    //     ]);
    // }
}
