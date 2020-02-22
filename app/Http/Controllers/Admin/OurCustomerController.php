<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OurCustomerRequest;
use App\Models\OurCustomer;
use Illuminate\Http\Request;

class OurCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.our-customers.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OurCustomerRequest $request)
    {
        $ourCustomer = OurCustomer::create($request->except('logo'));

        $ourCustomer->addMedia($request->file('logo'))->toMediaCollection('general');
        return \redirect()->back()->with('success', "Customer added successfully");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OurCustomer  $ourCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(OurCustomer $ourCustomer)
    {
        return view('admin.pages.our-customers.index', \compact('ourCustomer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OurCustomer  $ourCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(OurCustomerRequest $request, OurCustomer $ourCustomer)
    {
        $ourCustomer->update($request->except('logo'));
        $ourCustomer->addMedia($request->file('logo'))->toMediaCollection('general');
        return \redirect()->route('admin.our-customers.index')->with('success', "Customer updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OurCustomer  $ourCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurCustomer $ourCustomer)
    {
        //
    }
}
