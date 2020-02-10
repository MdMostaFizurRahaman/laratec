<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showCompanyDetailsForm()
    {
        $company = Settings::first();
        return view('admin.pages.settings.company')->with(compact('company'));
    }

    public function storeCompanyDetails(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|unique:settings',
            'email' => 'required|email',
            'telephone' => 'required',
            'mobile' => 'required',
            'hotline' => 'required',
            'address' => 'required|max:100',
            'logo' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        $companyDetails = Settings::firstOrCreate(['company_name' => $request->company_name],
                                        [
                                            'email' => $request->email,
                                            'telephone' => $request->telephone,
                                            'mobile' => $request->mobile,
                                            'hotline' => $request->hotline,
                                            'address' => $request->address,
                                            'logo' => $request->logo->getClientOriginalName(),
                                        ]);
        if($request->has('logo') && $companyDetails)
        {
            $addMedia = $companyDetails->addMediaFromRequest('logo')->withResponsiveImages()->toMediaCollection('logo');
        }
        return response(['status' => 'success', 'message' => 'Company details added successfully.']);
    }

    public function updateCompanyDetails(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|unique:settings,id,'.$request->id,
            'email' => 'required|email',
            'telephone' => 'required',
            'mobile' => 'required',
            'hotline' => 'required',
            'address' => 'required|max:100',
            'logo' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        $companyDetails = Settings::find($request->id)->first();
        $updateCompanyDetails = $companyDetails->update([
                                            'company_name' => $request->company_name,
                                            'email' => $request->email,
                                            'telephone' => $request->telephone,
                                            'mobile' => $request->mobile,
                                            'hotline' => $request->hotline,
                                            'address' => $request->address,
                                            'logo' => $request->logo->getClientOriginalName(),
                                        ]);
        if($request->has('logo') && $updateCompanyDetails)
        {
            $addMedia = $companyDetails->addMediaFromRequest('logo');
        }
        return response(['status' => 'success', 'message' => 'Company details added successfully.']);
    }
}
