<?php

namespace App\Http\Controllers;

use App\Models\productCategory;
use App\Http\Requests\StoreproductCategoryRequest;
use App\Http\Requests\UpdateproductCategoryRequest;

class ProductCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreproductCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(productCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(productCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductCategoryRequest  $request
     * @param  \App\Models\productCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductCategoryRequest $request, productCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(productCategory $productCategory)
    {
        //
    }
}
