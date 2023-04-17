<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Ville;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\CommercialiserPage;
use App\Models\CommercialiserContact;
use App\Models\Product;
use App\Models\ProductContact;
use App\Models\ProductType;
use App\Models\Proprietaire;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::where('status', 1)->get();

        $categoryConseils = Categorie::where('title', 'Conseils')->first();
        $conseils = $categoryConseils->blogs()->where('status', 1)->where('approved', 1)->get();

        $categoryMaroc = Categorie::where('title', 'DecouvrezLeMaroc')->first();
        $articlesMaroc = $categoryMaroc->blogs()->where('status', 1)->where('approved', 1)->get();

        $citys = Ville::get();

        $villes = Product::villes();
        $quartiers = Product::quartiers();
        $types = ProductType::where('product_category_id', 1)->get();
        $nbr_pieces = Product::where('product_category_id', 1)->max('nbr_chambres');


        return view('home', [
            'conseils' => $conseils,
            'articlesMaroc' => $articlesMaroc,
            'citys' => $citys,
            'quartiers' => $quartiers,
            'types' => $types,
            'nbr_pieces' => $nbr_pieces,
            'products' => $products,
            'villes' => $villes,
            'category_id' => '',
            'type_id' => '',
            'reference' => '',
            'ville' => '',
            'quartier' => '',
            'nbr_chambres' => '',
            'surface_min' => '',
            'prix_max' => '',
        ]);
    }

    public function achat(Request $request)
    {
        if ($request->category_id) {
            $products = Product::where('status', 1)
                ->whereIn('product_category_id', [1, 3])
                ->when($request->ville, function ($q) use ($request) {
                    $q->where('ville', $request->ville);
                })->when($request->quartier, function ($q) use ($request) {
                    $q->where('quartier', $request->quartier);
                })->when($request->type_id, function ($q) use ($request) {
                    $q->where('product_type_id', $request->type_id);
                })->when($request->reference != '', function ($q) use ($request) {
                    $q->where('reference', 'like', $request->reference);
                })->when($request->nbr_pieces, function ($q) use ($request) {
                    $q->where('nbr_chambres', $request->nbr_pieces);
                })->when($request->surface_min, function ($q) use ($request) {
                    $q->where('surface', '>', $request->surface_min);
                })->when($request->prix_max, function ($q) use ($request) {
                    $q->where('prix', '<', $request->prix_max);
                })
                ->get();
        } else {
            $products = Product::where('status', 1)->where('product_category_id', 1)->orWhere('product_category_id', 3)->get();
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
        if ($request->category_id) {
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

    public function immoneuf(Request $request)
    {
        if ($request->category_id) {
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
                'product_category_id' => 3,
            ])->get();
        }

        $villes = Product::villes();
        $quartiers = Product::quartiers();
        $types = ProductType::where('product_category_id', 3)->get();
        $nbr_pieces = Product::where('product_category_id', 3)->max('nbr_chambres');
        $promoteurs = Proprietaire::where('is_promoteur', 1)->get();

        return view('immoneuf', [
            'products' => $products,
            'villes' => $villes,
            'quartiers' => $quartiers,
            'types' => $types,
            'promoteurs' => $promoteurs,
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

    public function vacances(Request $request)
    {
        if ($request->category_id) {
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
            $articlesMaroc = $categoryMaroc[0]->blogs()->where('status', 1)->where('approved', 1)->get();
            $tags = $categoryMaroc[0]->blogs()->where('status', 1)->where('approved', 1)->tags();
            return view('decouvrezMaroc', [
                'tags' => $tags,
                'citys' => $villes,
                'articlesMaroc' => $articlesMaroc,
            ]);
        } else {
            $villes = Ville::get();
            $categoryMaroc = Categorie::where('title', 'DecouvrezLeMaroc')->get();
            $articlesMaroc = $categoryMaroc[0]->blogs()
                ->where('status', 1)->where('approved', 1)
                ->where('title', 'like', "%{$term}%")
                ->orWhere('subtitle', 'like', "%{$term}%")
                ->orWhere('tags', 'like', "%{$term}%")
                ->groupBy('blogs.id')
                ->get();

            $tags = $categoryMaroc[0]->blogs()->where('status', 1)->where('approved', 1)->tags();

            return view('decouvrezMaroc', [
                'tags' => $tags,
                'citys' => $villes,
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
            $conseils = $categoryConseils[0]->blogs()->where('status', 1)->where('approved', 1)->get();

            $tags = $categoryConseils[0]->blogs()->where('status', 1)->where('approved', 1)->tags();

            return view('conseils', [
                'tags' => $tags,
                'conseils' => $conseils,
            ]);
        } else {
            $categoryConseils = Categorie::where('title', 'Conseils')->get();
            $conseils = $categoryConseils[0]->blogs()
                ->where('status', 1)->where('approved', 1)
                ->where('title', 'like', '%' .  $term . '%')
                ->orWhere('subtitle', 'like', '%' .  $term . '%')
                ->orWhere('tags', 'like', '%' .  $term . '%')
                ->groupBy('blogs.id')
                ->get();
            $tags = $categoryConseils[0]->blogs()->where('status', 1)->where('approved', 1)->tags();
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
        $blog->vues++;
        $blog->save();
        $catgs = $blog->categories()->pluck('categorie_id')->toArray();
        $similaires = Blog::leftjoin('blog_has_categories', 'blog_has_categories.blog_id', 'blogs.id')
            ->where('status', 1)->where('approved', 1)
            ->select('blogs.*')
            ->whereIn('blog_has_categories.categorie_id',  $catgs)
            ->where('blogs.id', '!=', $id)
            ->groupBy('blogs.id')
            ->get();

        return view('blogDetail', [
            'blog' => $blog,
            'similaires' => $similaires,
        ]);
    }

    public function villeDetails($id)
    {
        $ville = Ville::findOrFail($id);
        $blogs = Blog::where('ville_id', $id)->where('status', 1)->where('approved', 1)->get();
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

    public function produit($id)
    {
        $p = Product::findOrFail($id);
        $p->vues++;
        $p->save();
        $products = Product::where('status', 1)->take(3)->get();
        $title = $p->category->title;
        switch ($title) {
            case 'Achat':
                $color = 'blue';
                break;
            case 'Location':
                $color = 'blue';
                break;
            case 'ImmoNeuf':
                $color = 'green';
                break;
            case 'Vacances':
                $color = 'orange';
                break;
            default:
                $color = 'blue';
                break;
        }
        return view('produit', [
            'product' => $p,
            'products' => $products,
            'color' => $color
        ]);
    }

    public function produitContact($id, Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|min:5|max:30',
            'phone' => 'required|digits:10',
            'email' => 'nullable|email|min:5|max:255',
            'message' => 'required|string|min:5|max:255',
        ]);

        $fullname = $request->fullname;
        $phone = $request->phone;
        $email = $request->email;
        $message = $request->message;

        $contact = new ProductContact();
        $contact->product_id = $id;
        $contact->fullname = $fullname;
        $contact->phone = $phone;
        $contact->email = $email;
        $contact->message = $message;
        $contact->save();

        return redirect()->back()->with('success', 'Envoyé avec success');
    }
}
