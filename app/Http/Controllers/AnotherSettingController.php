<?php

namespace App\Http\Controllers;

use App\Models\AnotherSetting;
use Illuminate\Http\Request;

class AnotherSettingController extends Controller
{
    public function index()
    {
        // $sitename2 = app(AnotherSetting::class)->site_name;
        $sitename2 = 't';
        dd($sitename2);

        return view('layouts.app2')->with('sitename2', $sitename2);
    }
}
