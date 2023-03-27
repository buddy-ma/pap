<?php

namespace App\Http\Controllers\Admin;

use App\Models\CommercialiserPage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommercialiserController extends Controller
{

    public function index()
    {
        $page = CommercialiserPage::first();
        if (!isset($page)) {
            $page = new CommercialiserPage();
        }

        return view('admin.mains-admin.commercialiser.commercialiser-page', ['page' => $page]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3|max:255',
            'address' => 'required|string|min:3|max:255',
            'phone' => 'required|digits:10',
            'email' => 'required|email|min:3|max:255',
            'editor1' => 'required',
        ]);
        $page = CommercialiserPage::first();
        if (!isset($page)) {
            $page = new CommercialiserPage();
        }

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
            $page->image = $url;
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }

        $page->title = $request->title;
        $page->address = $request->address;
        $page->phone = $request->phone;
        $page->email = $request->email;
        $page->text = $request->editor1;

        if ($request->hasFile('pdf')) {
            $filenamepdf = date('YmdHi') . $request->file('pdf')->getClientOriginalName();
            $request->file('pdf')->move(public_path('files'), $filenamepdf);
            $page->pdf = $filenamepdf;
        }

        $page->save();
        return redirect()->back()->with('success', 'Page saved successfully');
    }
}
