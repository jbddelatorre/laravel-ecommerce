<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    function showCategories() {
    	$categories = Category::all();
    	return view('categories.categories', compact('categories'));
    }

    function delete($id) {
    	$category = Category::find($id);
    	$category->delete();
    	return redirect('/categories');
    }
}
