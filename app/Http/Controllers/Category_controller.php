<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category_blogs;


class Category_controller extends Controller
{
    public function CreateNewCategory(Request $request) {
        
        $request->validate([
            'category' => "required"
        ]);

        $category = new Category_blogs();

        $category->name = $request->category;

        $category->save();

        return redirect()->route('add_blog');


    }
}
