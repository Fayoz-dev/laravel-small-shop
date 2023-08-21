<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::paginate(10);
        return view('brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required',
        ]);

        $requestData = $request -> all();
        $requestData['slug'] = Str::slug($requestData['name']);

        Brand::create($requestData);
        return redirect()->route('brands.index')->with('success', 'Brand created successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('brand.show' , compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('brand.update', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $this -> validate($request, [
            'name' => 'required',
        ]);
        $requestData = $request -> all();
        $requestData['slug'] = Str::slug($requestData['name']);
        $brand->update($requestData);

        return redirect()->route('brands.index')->with('success', 'Category updated successfully !');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand -> delete();
        return redirect()->route('brand.index')->with('success', 'Category Deleted successfully !');
    }
}
