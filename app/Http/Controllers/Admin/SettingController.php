<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Requests\SettingRequest;
use File;
class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        if($settings == null)
        {
            $settings       = new Setting;
            $settings->name = 'Nhập tên công ty';
            $settings->save();
        }
        File::exists("robots.txt");
        $file = File::get("robots.txt");

        return view('admin.setting.index', compact('settings', 'file'));
    }

    public function update(Request $req)
    {
        $settings            = Setting::first();
        $settings->name      = $req['name'];
        $settings->email     = $req['email'];
        $settings->address   = $req['address'];
        $settings->website   = $req['website'];
        $settings->hotline   = $req['hotline'];
        $settings->thead     = $req['thead'];
        $settings->tbody     = $req['tbody'];
        $settings->title_seo = $req['title_seo'];
        $settings->meta_des  = $req['meta_des'];
        $settings->meta_key  = $req['meta_key'];
        $robot               = $req['robot'];
        File::put("robots.txt", $robot);
        $settings->save();
        return redirect()->route('admin.setting');
    }
}
