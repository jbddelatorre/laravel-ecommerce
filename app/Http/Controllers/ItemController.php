<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    function showItems() {
    	$items = Item::all();
    	return view('items.items', compact('items'));
    }

    function delete($id) {
    	$item = Item::find($id);
    	$item->delete();
    	return redirect('/showitems');
    }
}
