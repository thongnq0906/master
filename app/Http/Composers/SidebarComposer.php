<?php
    namespace App\Http\Composers;

    use Illuminate\Contracts\View\View;
    use App\Models\Cate_product;
    use App\Models\Support;
    use App\Models\Post;
    use App\Models\Cate_post;
    use App\Models\Slide;

    class SidebarComposer
    {
        public function compose(View $view)
        {
            $cate = Cate_post::where('status', 1)->where('parent_id', '>',  0)->orderBy('position', 'ASC')->get();
            $view->with('cate', $cate);
            $ads = Slide::where('status', 1)->where('dislay', 3)->orderBy('position', 'ASC')->get();
            $view->with('ads', $ads);
        }
    }
