<?php
    namespace App\Http\Composers;

    use Illuminate\Contracts\View\View;
    use App\Models\Setting;

    class SettingComposer
    {
        public function compose(View $view)
        {
            $view->with('setting', Setting::first());
        }
    }
