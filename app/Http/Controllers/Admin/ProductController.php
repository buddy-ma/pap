<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function list()
    {
        return view('admin.mains-admin.products.product-list');
    }

    public function add()
    {
        return view('admin.mains-admin.products.product-add');
    }

    public function contacts()
    {
        return view('admin.mains-admin.products.product-contacts');
    }
}