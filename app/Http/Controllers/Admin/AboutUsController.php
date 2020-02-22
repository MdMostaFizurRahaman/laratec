<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsRequest;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.about-us.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutUsRequest $request)
    {
        $aboutUs = AboutUs::first();

        if ($aboutUs) {
            $aboutUs->update($request->except(['image', '_token']));
        } else {
            $aboutUs = AboutUs::create($request->except(['image', '_token']));
        }

        if($request->has('image')){

            $aboutUs->addMedia(request()->file('image'))->toMediaCollection('general');
        }

        return redirect()->back()->with('success', 'About us details updated successfully');
    }

}
