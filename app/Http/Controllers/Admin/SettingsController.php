<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showCompanyDetailsForm()
    {
        return view('admin.pages.settings.company');
    }
}