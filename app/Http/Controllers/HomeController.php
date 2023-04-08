<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Ville;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\CommercialiserPage;
use App\Models\CommercialiserContact;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::where('status', 1)->get();

        $categoryConseils = Categorie::where('title', 'Conseils')->get();
        $conseils = $categoryConseils[0]->blogs()->take(3)->get();

        $categoryMaroc = Categorie::where('title', 'DecouvrezLeMaroc')->get();
        $articlesMaroc = $categoryMaroc[0]->blogs()->take(3)->get();

        $villes = Ville::take(4)->get();

        return view('home', [
            'conseils' => $conseils,
            'articlesMaroc' => $articlesMaroc,
            'villes' => $villes,
            'products' => $products
        ]);
    }

    public function achat()
    {
        $products = Product::where([
            'status' => 1,
            'product_category_id' => 1,
        ])->get();

        return view('achat', [
            'products' => $products
        ]);
    }



    public function location()
    {
        $products = Product::where([
            'status' => 1,
            'product_category_id' => 2,
        ])->get();

        return view('location', [
            'products' => $products
        ]);
    }

    public function immoneuf()
    {
        $products = Product::where([
            'status' => 1,
            'product_category_id' => 3,
        ])->get();
        $villes = Product::villes();
        return view('immoneuf', [
            'products' => $products,
            'villes' => $villes
        ]);
    }

    public function vacances()
    {
        $products = Product::where([
            'status' => 1,
            'product_category_id' => 4,
        ])->get();

        return view('vacances', [
            'products' => $products
        ]);
    }

    public function decouvrezMaroc(Request $request)
    {
        $term = $request->input('search');
        if ($term == '' || $term == null) {
            $villes = Ville::get();
            $categoryMaroc = Categorie::where('title', 'DecouvrezLeMaroc')->get();
            $articlesMaroc = $categoryMaroc[0]->blogs()->paginate(12);
            $tags = $categoryMaroc[0]->blogs()->tags();
            return view('decouvrezMaroc', [
                'tags' => $tags,
                'villes' => $villes,
                'articlesMaroc' => $articlesMaroc,
            ]);
        } else {
            $villes = Ville::get();
            $categoryMaroc = Categorie::where('title', 'DecouvrezLeMaroc')->get();
            $articlesMaroc = $categoryMaroc[0]->blogs()
                ->where('title', 'like', "%{$term}%")
                ->orWhere('subtitle', 'like', "%{$term}%")
                ->orWhere('tags', 'like', "%{$term}%")
                ->groupBy('blogs.id')
                ->paginate(12);

            $tags = $categoryMaroc[0]->blogs()->tags();

            return view('decouvrezMaroc', [
                'tags' => $tags,
                'villes' => $villes,
                'articlesMaroc' => $articlesMaroc,
                'term' => $term,
            ]);
        }
    }

    public function conseils(Request $request)
    {
        $term = $request->input('search');
        if ($term == '' || $term == null) {
            $categoryConseils = Categorie::where('title', 'Conseils')->get();
            $conseils = $categoryConseils[0]->blogs()->paginate(12);

            $tags = $categoryConseils[0]->blogs()->tags();

            return view('conseils', [
                'tags' => $tags,
                'conseils' => $conseils,
            ]);
        } else {
            $categoryConseils = Categorie::where('title', 'Conseils')->get();
            $conseils = $categoryConseils[0]->blogs()
                ->where('title', 'like', '%' .  $term . '%')
                ->orWhere('subtitle', 'like', '%' .  $term . '%')
                ->orWhere('tags', 'like', '%' .  $term . '%')
                ->groupBy('blogs.id')
                ->paginate(12);
            $tags = $categoryConseils[0]->blogs()->tags();
            return view('conseils', [
                'tags' => $tags,
                'conseils' => $conseils,
                'term' => $term,
            ]);
        }
    }

    public function blogDetails($id)
    {
        $blog = Blog::findOrFail($id);
        $similaires = Blog::take(3)->get();
        return view('blogDetail', [
            'blog' => $blog,
            'similaires' => $similaires,
        ]);
    }

    public function villeDetails($id)
    {
        $ville = Ville::findOrFail($id);
        $blogs = Blog::where('ville_id', $id)->get();
        return view('villeDetails', [
            'ville' => $ville,
            'blogs' => $blogs,
        ]);
    }

    public function commercialiser()
    {
        $page = CommercialiserPage::first();
        if (!isset($page)) {
            $page = '';
        }
        return view('commercialiser', [
            'page' => $page
        ]);
    }

    public function commercialiserContact(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|min:5|max:30',
            'phone' => 'required|digits:10',
            'email' => 'nullable|email|min:5|max:255',
            'message' => 'required|string|min:5|max:255',
        ]);

        CommercialiserContact::create([
            'fullname' => $request->input('fullname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ]);
        session()->flash('success', 'Blog has been updated sucssefuly');
        return redirect('/commercialiser');
    }

    public function catalogue()
    {
        return view('catalogue');
    }
}