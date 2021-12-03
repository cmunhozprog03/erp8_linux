<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressCompanyRequest;
use App\Http\Requests\UpdateAddressCompanyRequest;
use App\Models\AddressCompany;

class AddressCompanyController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAddressCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddressCompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddressCompany  $addressCompany
     * @return \Illuminate\Http\Response
     */
    public function show(AddressCompany $addressCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddressCompany  $addressCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(AddressCompany $addressCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAddressCompanyRequest  $request
     * @param  \App\Models\AddressCompany  $addressCompany
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddressCompanyRequest $request, AddressCompany $addressCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddressCompany  $addressCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddressCompany $addressCompany)
    {
        //
    }
}
