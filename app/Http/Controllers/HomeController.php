<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Ville;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\CommercialiserPage;
use App\Models\CommercialiserContact;
use App\Models\Product;
use App\Models\ProductType;

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

    public function achat(Request $request)
    {
        if ($request->category) {
            $products = Product::query()
                ->where('status', 1)
                ->when($request->category_id, function ($q) use ($request) {
                    $q->where('product_category_id', $request->category_id);
                })->when($request->type_id, function ($q) use ($request) {
                    $q->where('product_type_id', $request->type_id);
                })->when($request->reference, function ($q) use ($request) {
                    $q->where('reference', 'like', $request->reference);
                })->when($request->ville, function ($q) use ($request) {
                    $q->where('ville', 'like', $request->ville);
                })->when($request->quartier, function ($q) use ($request) {
                    $q->where('quartier', 'like', $request->quartier);
                })->when($request->nbr_pieces, function ($q) use ($request) {
                    $q->where('nbr_chambres', '>', $request->nbr_pieces);
                })->when($request->surface_min, function ($q) use ($request) {
                    $q->where('surface_min', '>', $request->surface_min);
                })->when($request->prix_max, function ($q) use ($request) {
                    $q->where('prix_max', '<', $request->prix_max);
                })
                ->get();
        } else {
            $products = Product::where([
                'status' => 1,
                'product_category_id' => 1,
            ])->get();
        }
        $villes = Product::villes();
        $quartiers = Product::quartiers();
        $types = ProductType::where('product_category_id', 1)->get();
        $nbr_pieces = Product::where('product_category_id', 1)->max('nbr_chambres');

        return view('achat', [
            'products' => $products,
            'villes' => $villes,
            'quartiers' => $quartiers,
            'types' => $types,
            'nbr_pieces' => $nbr_pieces,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'reference' => $request->reference,
            'ville' => $request->ville,
            'quartier' => $request->quartier,
            'nbr_chambres' => $request->nbr_chambres,
            'surface_min' => $request->surface_min,
            'prix_max' => $request->prix_max,
        ]);
    }

    public function location(Request $request)
    {
        if ($request->category) {
            $products = Product::query()
                ->where('status', 1)
                ->when($request->category_id, function ($q) use ($request) {
                    $q->where('product_category_id', $request->category_id);
                })->when($request->type_id, function ($q) use ($request) {
                    $q->where('product_type_id', $request->type_id);
                })->when($request->reference, function ($q) use ($request) {
                    $q->where('reference', 'like', $request->reference);
                })->when($request->ville, function ($q) use ($request) {
                    $q->where('ville', 'like', $request->ville);
                })->when($request->quartier, function ($q) use ($request) {
                    $q->where('quartier', 'like', $request->quartier);
                })->when($request->nbr_pieces, function ($q) use ($request) {
                    $q->where('nbr_chambres', '>', $request->nbr_pieces);
                })->when($request->surface_min, function ($q) use ($request) {
                    $q->where('surface_min', '>', $request->surface_min);
                })->when($request->prix_max, function ($q) use ($request) {
                    $q->where('prix_max', '<', $request->prix_max);
                })
                ->get();
        } else {
            $products = Product::where([
                'status' => 1,
                'product_category_id' => 2,
            ])->get();
        }

        $villes = Product::villes();
        $quartiers = Product::quartiers();
        $types = ProductType::where('product_category_id', 2)->get();
        $nbr_pieces = Product::where('product_category_id', 2)->max('nbr_chambres');

        return view('location', [
            'products' => $products,
            'villes' => $villes,
            'quartiers' => $quartiers,
            'types' => $types,
            'nbr_pieces' => $nbr_pieces,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'reference' => $request->reference,
            'ville' => $request->ville,
            'quartier' => $request->quartier,
            'nbr_chambres' => $request->nbr_chambres,
            'surface_min' => $request->surface_min,
            'prix_max' => $request->prix_max,
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

    public function vacances(Request $request)
    {
        if ($request->category) {
            $products = Product::query()
                ->where('status', 1)
                ->when($request->category_id, function ($q) use ($request) {
                    $q->where('product_category_id', $request->category_id);
                })->when($request->type_id, function ($q) use ($request) {
                    $q->where('product_type_id', $request->type_id);
                })->when($request->reference, function ($q) use ($request) {
                    $q->where('reference', 'like', $request->reference);
                })->when($request->ville, function ($q) use ($request) {
                    $q->where('ville', 'like', $request->ville);
                })->when($request->quartier, function ($q) use ($request) {
                    $q->where('quartier', 'like', $request->quartier);
                })->when($request->nbr_pieces, function ($q) use ($request) {
                    $q->where('nbr_chambres', '>', $request->nbr_pieces);
                })->when($request->surface_min, function ($q) use ($request) {
                    $q->where('surface_min', '>', $request->surface_min);
                })->when($request->prix_max, function ($q) use ($request) {
                    $q->where('prix_max', '<', $request->prix_max);
                })
                ->get();
        } else {
            $products = Product::where([
                'status' => 1,
                'product_category_id' => 4,
            ])->get();
        }

        $villes = Product::villes();
        $quartiers = Product::quartiers();
        $types = ProductType::where('product_category_id', 4)->get();
        $nbr_pieces = Product::where('product_category_id', 4)->max('nbr_chambres');

        return view('vacances', [
            'products' => $products,
            'villes' => $villes,
            'quartiers' => $quartiers,
            'types' => $types,
            'nbr_pieces' => $nbr_pieces,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'reference' => $request->reference,
            'ville' => $request->ville,
            'quartier' => $request->quartier,
            'nbr_chambres' => $request->nbr_chambres,
            'surface_min' => $request->surface_min,
            'prix_max' => $request->prix_max,
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

    public function heroForm(Request $request)
    {
        $category_id = $request->category_id ?? 0;
        $type_id = $request->type_id ?? 0;
        $ville = $request->ville ?? '';
        $quartier = $request->quartier ?? '';
        $nbr_pieces = $request->nbr_pieces;
        $surface_min = $request->surface_min;
        $prix_max = $request->prix_max ?? 100000000000;
        $reference = $request->reference ?? '';

        $products = Product::where('status', 1)
            ->where('product_category_id', $category_id)
            ->where('product_type_id', $type_id)
            ->where('reference', 'like', $reference)
            ->where('ville', 'like', $ville)
            ->where('quartier', 'like', $quartier)
            ->where('nbr_pieces', '>', $nbr_pieces)
            ->where('surface_min', '>', $surface_min)
            ->where('prix_max', '<', $prix_max)
            ->get();


        // if ($category_id == 1) {
        // } elseif ($category_id == 2) {
        // } elseif ($category_id == 3) {
        // }
    }
}