<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarouselRequest;

class CarouselController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function carousels()
    {
        $carousels = Carousel::all();
        return view('admin.pages.carousels.carousel')->with(compact('carousels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarouselRequest $request)
    {
        $carousel = Carousel::firstOrCreate(['title' => $request->title],
                                        [
                                            'subtitle' => $request->subtitle,
                                            'link' => $request->link,
                                            'slider' => $request->slider->getClientOriginalName(),
                                        ]);
        if($request->has('slider') && $carousel)
        {
            $addMedia = $carousel->addMediaFromRequest('slider')->withResponsiveImages()->toMediaCollection('carousels');
        }

        Alert::success('Success', 'Carousel added successfully.');
        return redirect()->back();
        // return response(['status' => 'success', 'message' => 'Carousel added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(CarouselRequest $request)
    {
        $carousel = Carousel::find($request->id)->first();
        $updateCarousel = $carousel->update([
                                        'title' => $request->title,
                                        'subtitle' => $request->subtitle,
                                        'link' => $request->link,
                                        'slider' => $request->hasFile('slider') ? $request->slider->getClientOriginalName() : $carousel->slider,
                                    ]);
        if($request->hasFile('slider') && $updateCarousel)
        {
            $updateMedia = $carousel->addMediaFromRequest('slider')->withResponsiveImages()->toMediaCollection('carousels');
        }

        if($updateCarousel)
        {
            Alert::success('Success', 'Carousel updated successfully.');
            return redirect()->back();
            // return response(['status' => 'success', 'message' => 'Carousel updated successfully.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
        //
    }
}
