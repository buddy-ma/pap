<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ville;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VilleController extends Controller
{
    public function list()
    {
        $villes = Ville::get();
        return view('admin.mains-admin.villes.ville-list', ['villes' => $villes]);
    }

    public function add()
    {
        return view('admin.mains-admin.villes.ville-add');
    }

    public function store(Request $request)
    {
        $ville = new Ville();
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            $ville->image = $url;
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }

        $ville->title = $request->title;
        $ville->video = $request->video_link;
        $ville->text = $request->editor1;

        if ($request->hasFile('image')) {
            $filename = date('YmdHi') . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/villes'), $filename);
            $ville->image = $filename;
        }

        $ville->save();
        session()->flash('success', 'Ville has been created successfully');
        return redirect('admin/villes');
    }

    public function edit($id)
    {
        $ville = Ville::find($id);

        return view('admin.mains-admin.villes.ville-show', [
            'ville' => $ville,
        ]);
    }

    public function update(Request $request, $id)
    {
        $ville = Ville::find($id);
        $ville->title = $request->title;
        $ville->video = $request->video_link;

        $ville->text = $request->editor1;
        if ($request->hasFile('image')) {
            $filename = date('YmdHi') . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/villes/'), $filename);
            $ville->image = $filename;
        }

        $ville->save();
        session()->flash('success', 'Merci de nous contacter, on vous rappelle le plus proche possible');
        return redirect('admin/villes');
    }

    public function delete($id)
    {
        $ville = Ville::find($id);
        $ville->delete();
        session()->flash('success', 'Ville has been deleted sucssefuly');
        return redirect('admin/villes');
    }

    public function liens($id)
    {
        return view('admin.mains-admin.villes.ville-links', [
            'id' => $id,
        ]);
    }
}