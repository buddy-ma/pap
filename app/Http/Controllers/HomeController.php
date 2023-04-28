<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Ville;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\ProductType;
use App\Models\ProductVille;
use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Models\ProductContact;
use App\Models\ConseilCategory;
use App\Models\ProductQuartier;
use App\Models\CommercialiserPage;
use App\Models\CommercialiserContact;

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

        $villes = ProductVille::get();
        $quartiers = ProductQuartier::get();
        $types = ProductType::where('product_category_id', 1)->get();
        $nbr_pieces = Product::where('product_category_id', 1)->max('nbr_chambres');


        return view('home', [
            'conseils' => $conseils,
            'articlesMaroc' => $articlesMaroc,
            'citys' => $citys,
            'types' => $types,
            'nbr_pieces' => $nbr_pieces,
            'products' => $products,
            'villes' => $villes,
            'quartiers' => $quartiers,
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
        $villes = ProductVille::get();
        $quartiers = ProductQuartier::get();
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

        $villes = ProductVille::get();
        $quartiers = ProductQuartier::get();
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

        $villes = ProductVille::get();
        $quartiers = ProductQuartier::get();
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

        $villes = ProductVille::get();
        $quartiers = ProductQuartier::get();
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
        $categoryConseils = ConseilCategory::get();

        if ($term == '' || $term == null) {
            $category = Categorie::where('title', 'Conseils')->get();
            $conseils = $category[0]->blogs()->where('status', 1)->where('approved', 1)->get();

            $tags = $category[0]->blogs()->where('status', 1)->where('approved', 1)->tags();

            return view('conseils', [
                'tags' => $tags,
                'conseils' => $conseils,
                'categoryConseils' => $categoryConseils,
            ]);
        } else {
            $category = Categorie::where('title', 'Conseils')->get();
            $conseils = $category[0]->blogs()
                ->where('status', 1)->where('approved', 1)
                ->where('title', 'like', '%' . $term . '%')
                ->orWhere('subtitle', 'like', '%' . $term . '%')
                ->orWhere('tags', 'like', '%' . $term . '%')
                ->groupBy('blogs.id')
                ->get();
            $tags = $category[0]->blogs()->where('status', 1)->where('approved', 1)->tags();
            return view('conseils', [
                'tags' => $tags,
                'conseils' => $conseils,
                'term' => $term,
                'categoryConseils' => $categoryConseils,
            ]);
        }
    }

    public function filterConseils(Request $request)
    {
        $c = Categorie::where('title', 'Conseils')->first();
        $ids = $c->blogs()->pluck('blogs.id')->toArray();
        if($request->id == 0){
            $conseils = Blog::whereIn('blogs.id', $ids)
            ->when($request->searchInput != "", function ($q) use ($request) {
                return $q->where('title', 'like', '%' . $request->searchInput . '%')
                ->orWhere('subtitle', 'like', '%' . $request->searchInput . '%')
                ->orWhere('tags', 'like', '%' . $request->searchInput . '%');
            })
            ->where('status', 1)->where('approved', 1)
            ->get();
        }else{
            $category = ConseilCategory::find($request->id);
            $conseils = $category->blogs()
                ->whereIn('blogs.id', $ids)
                ->where('status', 1)->where('approved', 1)
                ->when($request->searchInput != "", function ($q) use ($request) {
                    return $q->where('title', 'like', '%' . $request->searchInput . '%')
                    ->orWhere('subtitle', 'like', '%' . $request->searchInput . '%')
                    ->orWhere('tags', 'like', '%' . $request->searchInput . '%');
                })
                ->groupBy('blogs.id')
                ->get();
        }
        
        return response()->json($conseils);
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blog->vues++;
        $blog->save();
        $catgs = $blog->categories()->pluck('categorie_id')->toArray();
        $similaires = Blog::leftjoin('blog_has_categories', 'blog_has_categories.blog_id', 'blogs.id')
            ->where('status', 1)->where('approved', 1)
            ->select('blogs.*')
            ->whereIn('blog_has_categories.categorie_id', $catgs)
            ->where('blogs.slug', '!=', $slug)
            ->groupBy('blogs.id')
            ->get();

        $achat = Product::where('status', 1)->where('product_category_id', 1)->get()->take(5);
        $location = Product::where('status', 1)->where('product_category_id', 2)->get()->take(5);
        $immoneuf = Product::where('status', 1)->where('product_category_id', 3)->get()->take(5);
        $vacances = Product::where('status', 1)->where('product_category_id', 4)->get()->take(5);

        return view('blogDetail', [
            'blog' => $blog,
            'similaires' => $similaires,
            'achat' => $achat,
            'location' => $location,
            'immoneuf' => $immoneuf,
            'vacances' => $vacances,
        ]);
    }

    public function villeDetails($slug)
    {
        $ville = Ville::where('title', $slug)->firstOrFail();
        $blogs = Blog::where('ville_id', $ville->id)->where('status', 1)->where('approved', 1)->get();
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

    public function produit($slug)
    {
        $p = Product::where('slug', $slug)->firstOrFail();
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