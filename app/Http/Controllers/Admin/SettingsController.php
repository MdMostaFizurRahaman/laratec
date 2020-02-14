<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsRequest;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:admin');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function showCompanyDetailsForm()
    {
        $settings = Settings::first();
        return view('admin.pages.settings.company', compact('settings'));
    }

    public function storeCompanyDetails(SettingsRequest $request)
    {
        $settings = Settings::find(1);

        if ($settings) {
            $settings->update($request->except(['logo', '_token']));
        } else {
            $settings = Settings::create($request->except(['logo', '_token']));
        }

        $settings->addMedia(request()->file('logo'))->toMediaCollection('settings');;

        return redirect()->back()->with('success', 'Company details updated successfully');
    }
}
