<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategorieController extends Controller
{
    public function list()
    {
        return view('admin.mains-admin.categorie.categorie-list');
    }
}
