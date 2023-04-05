<?php

namespace App\Http\Controllers\Admin;

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

    public function edit($id)
    {
        return view('admin.mains-admin.products.product-edit', ['id' => $id]);
    }

    public function contacts()
    {
        return view('admin.mains-admin.products.product-contacts');
    }

    public function types()
    {
        return view('admin.mains-admin.products.product-types');
    }
}