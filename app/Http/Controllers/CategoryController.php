<?php

namespace App\Http\Controllers;

use App\Mail\CreateCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('admin.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = Category::create($request->all());
        
         Mail::to(['andres.3802010523@ucaldas.edu.co', 'mateo.ceballos14714@ucaldas.edu.co'])
        ->send(new CreateCategory($category));
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
    
        return view('admin.categories.show',[
            'category' => $category,
            'products' => $category->products,
        
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
       
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
