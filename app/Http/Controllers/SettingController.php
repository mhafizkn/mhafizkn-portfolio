<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;

class SettingController extends Controller
{
    public function index()
    {
        $sitename = app(GeneralSetting::class)->site_name;
        // dd($setting);
        return view('layouts.app')->with('sitename', $sitename);
    }
}
