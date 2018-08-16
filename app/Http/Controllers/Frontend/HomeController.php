<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cate_Slide;
use App\Models\Slide;
use App\Models\Cate_post;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::where('status', 1)->orderBy('position', 'ASC')->get();
        $top     = Slide::where('status', 1)->where('dislay', 1)->first();
        $cf      = Slide::where('status', 1)->where('dislay', 2)->first();

        return view('frontend.index', compact('product', 'cf', 'top'));
    }
}
