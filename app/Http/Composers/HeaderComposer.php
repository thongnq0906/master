<?php
    namespace App\Http\Composers;

    use Illuminate\Contracts\View\View;
    use Cart;
    use App\Models\Banner;

    class HeaderComposer
    {
        public function compose(View $view)
        {
            $view->with('total', Cart::total());
            $view->with('count', Cart::count());

            $view->with('logo', Banner::where('status', 1)->first());
        }
    }
