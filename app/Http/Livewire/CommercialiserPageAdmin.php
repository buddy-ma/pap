<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CommercialiserPage;

class CommercialiserPageAdmin extends Component
{
    public $page;
    public $title, $text, $pdf, $address, $phone, $email;

    public function mount()
    {
        $this->page = CommercialiserPage::first();
        if ($this->page) {
            $this->title = $this->page->title;
            $this->text = $this->page->text;
            $this->pdf = $this->page->pdf;
            $this->address = $this->page->address;
            $this->phone = $this->page->phone;
            $this->email = $this->page->email;
        }
    }

    public function save()
    {
        if (!$this->page) {
            $this->page = new CommercialiserPage();
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

        $blog->save();
        $blog->categories()->sync($request->categories);
        session()->flash('success', 'Blog has been created successfully');
        return redirect('admin/blogs');
    }

    public function render()
    {
        return view('livewire.commercialiser-page-admin');
    }
}
