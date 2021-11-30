<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting = app(Setting::class)->id;
        dd($setting);

        return view('layouts.app', compact($setting));
    }
}
