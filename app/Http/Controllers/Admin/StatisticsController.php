<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Models\Blog;
use App\Models\Order;
use App\Models\Ville;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    public function Dashboard()
    {
        $products_count = Product::count();
        $active_products_count = Product::where('status', 1)->count();
        $desactive_products_count = Product::where('status', 0)->count();
        $products_vues_count = Product::where('status', 0)->count();


        //Blog Categories
        $conseils_cat = Categorie::where('title', 'Conseils')->first();
        $dm_cat = Categorie::where('title', 'DecouvrezLeMaroc')->first();

        $total_conseils = $conseils_cat->blogs()->count();
        $new_conseils = $conseils_cat->blogs()->where('approved', 0)->count();
        $total_vues_conseils = $conseils_cat->blogs()->sum('vues');
        $disabled_conseils = $conseils_cat->blogs()->where('status', 0)->count();

        $total_dm = $dm_cat->blogs()->count();
        $new_dm = $dm_cat->blogs()->where('approved', 0)->count();
        $total_vues_dm = $dm_cat->blogs()->sum('vues');
        $disabled_dm = $dm_cat->blogs()->where('status', 0)->count();

        $top_conseils = $conseils_cat->blogs()->orderBy('vues', 'Desc')->take(5)->get();
        $top_dm = $dm_cat->blogs()->orderBy('vues', 'Desc')->take(5)->get();

        $blogs_count = Blog::count();
        $vues_count = Blog::sum('vues');
        $villes_count = Ville::count();

        return view('admin.mains-admin.statistics.dashboard', [
            'total_conseils' => $total_conseils,
            'new_conseils' => $new_conseils,
            'total_vues_conseils' => $total_vues_conseils,
            'disabled_conseils' => $disabled_conseils,
            'total_dm' => $total_dm,
            'new_dm' => $new_dm,
            'total_vues_dm' => $total_vues_dm,
            'disabled_dm' => $disabled_dm,
            'top_conseils' => $top_conseils,
            'top_dm' => $top_dm,
            'blogs_count' => $blogs_count,
            'vues_count' => $vues_count,
            'villes_count' => $villes_count,
            'products_count' => $products_count,
            'active_products_count' => $active_products_count,
            'desactive_products_count' => $desactive_products_count,
            'products_vues_count' => $products_vues_count,
        ]);
    }
}