<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Category_blogs;
use App\Http\Controllers\Controller;


class Category_controller extends Controller
{
    public function CreateNewCategory(Request $request) {
        
        $request->validate([
            'category' => "required"
        ]);

        $category = new Category_blogs();

        $category->name = $request->category;

        $category->save();

        if(auth()->user()->name == "Adrian") {
            return redirect()->route('AdminBlog');
        } else if (auth()->user()->name == "Jose"){
            return redirect()->route('CreatorsBlogs');
        }
    }

    public function index(){
        $categories = Category::all();
        return view('categories.index', compact('categories')); 
    }

    public function create(){
        return view('categories.create');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category')); 
    }

    public function update(Request $request,Category $category){
        $request->validate([
            'name' => 'required|string',
        ]);

        $input = $request->all();
        $category->update($input);
        return redirect()->route('categories.index')
        ->with('success','Categoria actualizada correctamente');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories.index')
        ->with('success','Categoria ha sido creada exitosamente.');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('categories.index')
        ->with('success', 'Categoria eliminado correctamente');
    }
}
