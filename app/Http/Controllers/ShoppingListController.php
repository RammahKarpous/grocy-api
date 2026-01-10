<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            "name"=> "required|string",
        ]);

        ShoppingList::create([
            "name"=> $request->input('name'),
        ]);
    }
}
