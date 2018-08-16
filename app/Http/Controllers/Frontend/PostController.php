<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Cate_post;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    public function listPost($slug)
    {
        $cate_post = Cate_post::where('slug', $slug)->first();
        $id        = $cate_post->id;
        session()->put('id',$id);
        $post = Post::orderBy('position','ASC')->where('status', 1)->where(function($query)
        {
            $pro       = $query;
            $id        = session('id');
            $cate_post = Cate_post::find($id);
            $pro       = $pro->orWhere('cate_post_id',$cate_post->id); // bài viết có id của danh muc cha cấp 1.
            $com       = Cate_post::where('parent_id',$cate_post->id)->get();//danh mục cha cấp 2.
            foreach ($com as $dt) {
                $pro = $pro->orWhere('cate_post_id',$dt->id);// bài viết có id của danh muc cha cấp 2.
            }
            session()->forget('id');//xóa session;
        })->paginate(8);

        return view('frontend.posts.list', compact('post', 'cate_post'));
    }

    public function detail($slug)
    {
        $detail = Post::where('status', 1)->where('slug', $slug)->first();

        return view('frontend.posts.detail', compact('detail'));
    }

    public function postSearch(Request $req)
    {
        $input  = $req->search;
        $search = Post::where('name', 'LIKE',"%$input%")->where('status', 1)->paginate(8);

        return view('frontend.search', compact('search', 'input'));
    }
}
