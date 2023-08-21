<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
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

        Category::create($requestData);
        return redirect()->route('categories.index')->with('success', 'Category created successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show' , compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $this -> validate($request, [
            'name' => 'required',
        ]);
        $requestData = $request -> all();
        $requestData['slug'] = Str::slug($requestData['name']);
        $category->update($requestData);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category -> delete();
        return redirect()->route('categories.index')->with('success', 'Category Deleted successfully !');
    }
}
