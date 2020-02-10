<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanySettingRequest;

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

    public function storeCompanyDetails(CompanySettingRequest $request)
    {
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

        Alert::success('Success', 'Company details added successfully.');
        return redirect()->back();
        // return response(['status' => 'success', 'message' => 'Company details added successfully.']);
    }

    public function updateCompanyDetails(CompanySettingRequest $request)
    {
        $companyDetails = Settings::find($request->id);
        $updateCompanyDetails = $companyDetails->update([
                                    'company_name' => $request->company_name,
                                    'email' => $request->email,
                                    'telephone' => $request->telephone,
                                    'mobile' => $request->mobile,
                                    'hotline' => $request->hotline,
                                    'address' => $request->address,
                                    'logo' => $request->hasFile('logo') ? $request->logo->getClientOriginalName() : $companyDetails->logo,
                                ]);
        if($request->hasFile('logo') && $updateCompanyDetails)
        {
            $addMedia = $companyDetails->addMediaFromRequest('logo');
        }

        if($updateCompanyDetails)
        {
            Alert::success('Success', 'Company details updated successfully.');
            return redirect()->back();
            // return response(['status' => 'success', 'message' => 'Company details added successfully.']);
        }
    }
}
