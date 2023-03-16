<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Design;
use App\Models\DesignSection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Image;

class LandingController extends Controller
{
    public function Designs()
    {
        return view('admin.mains-admin.landing.designs');
    }

    public function Products()
    {
        return view('admin.mains-admin.landing.products');
    }

    public function Orders()
    {
        return view('admin.mains-admin.landing.orders');
    }

    public function Status()
    {
        return view('admin.mains-admin.landing.status');
    }

    public function Emails()
    {
        return view('admin.mains-admin.landing.emails');
    }

    public function Profile()
    {
        return view('admin.mains-admin.landing.profile');
    }

    public function Header()
    {
        return view('admin.mains-admin.landing.header');
    }

    public function Services()
    {
        return view('admin.mains-admin.landing.services');
    }

    public function Numbers()
    {
        return view('admin.mains-admin.landing.numbers');
    }

    public function Plans()
    {
        return view('admin.mains-admin.landing.plans');
    }

    public function Links()
    {
        return view('admin.mains-admin.landing.links');
    }
    
    public function Translations()
    {
        return view('admin.mains-admin.landing.translations');
    }

    public function Settings()
    {
        return view('admin.mains-admin.landing.settings');
    }
}