<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Http\Requests\SlideRequest;
use Image;
use Illuminate\Support\Facades\Validator;

class SlideController extends Controller
{
    public function index()
    {
        $slide = Slide::paginate(10);

        return view('admin.slide.index', compact('slide'));
    }

    public function create()
    {
        return view('admin.slide.create');
    }

    public function postCreate(SlideRequest $req)
    {
        $slide              = new Slide;
        $slide->name        = $req['name'];
        $slide->description = $req['description'];
        $slide->link        = $req['link'];
        $slide->position    = $req['position'];
        $slide->dislay      = $req['dislay'];
        $slide->status      = (is_null($req['status']) ? '0' : '1');
        if($req->hasFile('image')){
            $image    = $req->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('upload/images/'.$filename));
            $slide->image = ('upload/images/'.$filename);
        }
        $slide->save();

        return redirect()->route('admin.slide.index');
    }

    public function update($id)
    {
        $slide = Slide::where('id', $id)->first();

        return view('admin.slide.edit', compact('slide'));
    }

    public function postUpdate($id, Request $req)
    {
        $slide              = Slide::where('id', $id)->first();
        $slide->name        = $req['name'];
        $slide->description = $req['description'];
        $slide->link        = $req['link'];
        $slide->position    = $req['position'];
        $slide->dislay      = $req['dislay'];
        $slide->status      = (is_null($req['status']) ? '0' : '1');
        if($req->hasFile('image'))
        {
            if(file_exists($slide->image))
            {
                unlink($slide->image);
            }
            $image    = $req->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('upload/images/'.$filename));
            $slide->image = ('upload/images/'.$filename);
        }
        $validatedData = $req->validate([
            'position' => 'numeric|nullable|min:0|unique:slides,position,' .$slide->id,
        ]);
        $slide->save();

        return redirect()->route('admin.slide.index')->with('success', 'Sửa thành công');
    }

    public function destroy($id)
    {
        $result = Slide::findOrFail($id);
        if(file_exists($result->image))
        {
            unlink($result->image);
        }
        $result->delete();

        return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function status(Request $req)
    {
        if ($req->ajax())
        {
            $result = Slide::find($req->id);
            if ($result->status == 0)
            {
                $result->status = 1;
            } else {
                $result->status = 0;
            }
            $result->save();

            return response($result);
        }
    }
}

