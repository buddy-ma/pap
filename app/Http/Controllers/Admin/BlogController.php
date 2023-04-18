<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\User;
use App\Models\Ville;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function list()
    {
        return view('admin.mains-admin.blogs.blog-list');
    }

    public function new()
    {
        return view('admin.mains-admin.blogs.blog-new');
    }

    public function decouvrez()
    {
        return view('admin.mains-admin.blogs.blog-decouvrez');
    }

    public function decouvrezNew()
    {
        return view('admin.mains-admin.blogs.blog-decouvrez-new');
    }

    public function add()
    {
        $categories = Categorie::with('children')->where('id', '!=', 9)->get();
        return view('admin.mains-admin.blogs.blog-add', ['categories' => $categories]);
    }

    public function addDecouvrez()
    {
        $villes = Ville::get();
        return view('admin.mains-admin.blogs.blog-add-decouvrez', ['villes' => $villes]);
    }

    public function upload(Request $request): JsonResponse
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $url = asset('images/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3|max:255',
            'subtitle' => 'nullable|string|min:3|max:255',
            'vr_link' => 'nullable|string|min:3|max:255',
            'video_link' => 'nullable|string|min:3|max:255',
            'tags' => 'nullable|string|min:3|max:255',
            'editor1' => 'required',
        ], [
            'editor1.required' => 'Article is required'
        ]);

        $blog = new Blog();

        $blog->user_id = Auth::id();
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->vr_link = $request->vr_link;
        $blog->video_link = $request->video_link;
        $blog->tags = $request->tags;
        $blog->text = $request->editor1;

        if ($request->hasFile('image')) {
            $filename = date('YmdHi') . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $filename);
            $blog->image = $filename;
        }

        if ($request->hasFile('pdf')) {
            $filenamepdf = date('YmdHi') . $request->file('pdf')->getClientOriginalName();
            $request->file('pdf')->move(public_path('files'), $filenamepdf);
            $blog->pdf_link = $filenamepdf;
        }

        $blog->status = 1;
        $blog->save();
        $blog->categories()->sync($request->categories);
        session()->flash('success', 'Blog has been created successfully');
        return redirect('admin/blogs');
    }

    public function storeDecouvrez(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3|max:255',
            'subtitle' => 'nullable|string|min:3|max:255',
            'vr_link' => 'nullable|string|min:3|max:255',
            'video_link' => 'nullable|string|min:3|max:255',
            'tags' => 'nullable|string|min:3|max:255',
            'editor1' => 'required',
        ], [
            'editor1.required' => 'Article is required'
        ]);

        $blog = new Blog();
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'Image uploaded successfully';
            console . log($CKEditorFuncNum, '$url', '$msg');
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            $blog->image = $url;
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }

        $blog->user_id = Auth::id();
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->vr_link = $request->vr_link;
        $blog->video_link = $request->video_link;
        $blog->tags = $request->tags;
        $blog->ville_id = $request->ville;
        $blog->quartier = $request->quartier ?? '';
        $blog->text = $request->editor1;

        if ($request->hasFile('image')) {
            $filename = date('YmdHi') . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $filename);
            $blog->image = $filename;
        }

        if ($request->hasFile('pdf')) {
            $filenamepdf = date('YmdHi') . $request->file('pdf')->getClientOriginalName();
            $request->file('pdf')->move(public_path('files'), $filenamepdf);
            $blog->pdf_link = $filenamepdf;
        }

        $blog->status = 1;
        $blog->save();
        $blog->categories()->sync([9]);
        session()->flash('success', 'Blog ajouté avec success');
        return redirect('admin/blogs/decouvrez');
    }

    public function update($id)
    {
        $blog = Blog::find($id);

        $catgs = $blog->categories()->pluck('categorie_id')->toArray();

        $categories = Categorie::with('children')->whereNull('parent_id')->get();
        $autrs = Blog::join("users", "users.id", "=", "blogs.user_id")
            ->where("blogs.id", $id)
            ->get('firstname', 'lastname');
        $users = User::all();

        $tags = $blog->tags;
        $vr_link = $blog->vr_link;
        $video_link = $blog->video_link;

        return view('admin.mains-admin.blogs.blog-show', [
            'blog' => $blog,
            'catgs' => $catgs,
            'categories' => $categories,
            'users' => $users,
            'autrs' => $autrs,
            'tags' => $tags,
            'vr_link' => $vr_link,
            'video_link' => $video_link,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3|max:255',
            'subtitle' => 'nullable|string|min:3|max:255',
            'vr_link' => 'nullable|string|min:3|max:255',
            'video_link' => 'nullable|string|min:3|max:255',
            'tags' => 'nullable|string|min:3|max:255',
            'editor1' => 'required',
        ], [
            'editor1.required' => 'Article is required'
        ]);

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->tags = $request->tags;
        $blog->vr_link = $request->vr_link;
        $blog->video_link = $request->video_link;

        $blog->text = $request->editor1;
        if ($request->hasFile('image')) {
            $filename = date('YmdHi') . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $filename);
            $blog->image = $filename;
        }

        if ($request->hasFile('pdf')) {
            $filenamepdf = date('YmdHi') . $request->file('pdf')->getClientOriginalName();
            $request->file('pdf')->move(public_path('files'), $filenamepdf);
            $blog->pdf_link = $filenamepdf;
        }
        $blog->categories()->sync($request->categories);
        $blog->save();
        session()->flash('success', 'Blog enregistré avec success');
        return redirect('admin/blogs');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        session()->flash('success', 'Blog has been deleted sucssefuly');
        return redirect('admin/blogs');
    }

    public function restore($id)
    {
        Blog::withTrashed()
            ->where('id', $id)
            ->restore();
        session()->flash('success', 'Blog has been restored sucssefuly');
        return redirect('admin/blogs');
    }

    public function approve($id)
    {
        $blog = Blog::find($id);
        $blog->approved = 1;
        $blog->save();
        return redirect('/admin/blogs')->with('success', 'Blog has been approved sucssefuly');
    }

    public function changeStatus(Request $request)
    {
        $user = Blog::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        $tags = explode(",", $blog->tags);
        return view('admin.mains-admin.blogs.blog-show-all', ['blog' => $blog, 'tags' => $tags]);
    }

    public function add_date($id, Request $request)
    {
        $blog = Blog::find($id);
        $blog->end_new = $request->date;
        $blog->save();
        return redirect()->back();
    }
}