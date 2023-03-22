<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $categoryConseils = Categorie::where('title', 'Conseils')->get();
        $conseils = $categoryConseils[0]->blogs()->take(3)->get();

        $categoryMaroc = Categorie::where('title', 'DecouvrezLeMaroc')->get();
        $articlesMaroc = $categoryMaroc[0]->blogs()->take(3)->get();

        return view('home', [
            'conseils' => $conseils,
            'articlesMaroc' => $articlesMaroc,
        ]);
    }

    public function decouvrezMaroc(Request $request)
    {
        $term = $request->input('search');
        if ($term == '' || $term == null) {

            $categoryMaroc = Categorie::where('title', 'DecouvrezLeMaroc')->get();
            $articlesMaroc = $categoryMaroc[0]->blogs()->paginate(12);

            return view('decouvrezMaroc', [
                'articlesMaroc' => $articlesMaroc,
            ]);
        } else {
            $categoryMaroc = Categorie::where('title', 'DecouvrezLeMaroc')->get();
            $articlesMaroc = $categoryMaroc[0]->blogs()
                ->where('title', 'like', "%{$term}%")
                ->orWhere('subtitle', 'like', "%{$term}%")
                ->orWhere('tags', 'like', "%{$term}%")
                ->paginate(12);

            return view('decouvrezMaroc', [
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

            return view('conseils', [
                'conseils' => $conseils,
            ]);
        } else {
            $categoryConseils = Categorie::where('title', 'Conseils')->get();
            $conseils = $categoryConseils[0]->blogs()
                ->where('title', 'like', '%' .  $term . '%')
                ->orWhere('subtitle', 'like', '%' .  $term . '%')
                ->orWhere('tags', 'like', '%' .  $term . '%')
                ->paginate(12);

            return view('conseils', [
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
}
