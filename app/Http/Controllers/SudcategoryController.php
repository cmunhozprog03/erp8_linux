<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSudcategoryRequest;
use App\Http\Requests\UpdateSudcategoryRequest;
use App\Models\Sudcategory;

class SudcategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreSudcategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSudcategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sudcategory  $sudcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Sudcategory $sudcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sudcategory  $sudcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Sudcategory $sudcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSudcategoryRequest  $request
     * @param  \App\Models\Sudcategory  $sudcategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSudcategoryRequest $request, Sudcategory $sudcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sudcategory  $sudcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sudcategory $sudcategory)
    {
        //
    }
}
