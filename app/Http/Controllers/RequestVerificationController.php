<?php

namespace App\Http\Controllers;

use App\Models\RequestVerification;
use App\Http\Requests\StoreRequestVerificationRequest;
use App\Http\Requests\UpdateRequestVerificationRequest;

class RequestVerificationController extends Controller
{
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
    public function create()
    {
        return view('request.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRequestVerificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestVerificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestVerification  $requestVerification
     * @return \Illuminate\Http\Response
     */
    public function show(RequestVerification $requestVerification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestVerification  $requestVerification
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestVerification $requestVerification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequestVerificationRequest  $request
     * @param  \App\Models\RequestVerification  $requestVerification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequestVerificationRequest $request, RequestVerification $requestVerification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestVerification  $requestVerification
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestVerification $requestVerification)
    {
        //
    }
}
