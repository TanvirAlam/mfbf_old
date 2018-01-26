<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategories(Request $request)
    {
        $query = $request->get('query');
        $categories = Category::where('name','like','%'.$query.'%')->get();
        return response()->json($categories);
    }

    public function saveCategory(Request $request)
    {
        $request->validate([
            'query' => 'required|string'
        ]);

        Category::firstOrCreate([
            'group_id' =>12,
            'name' => $request->get('query')
        ]);

    }

    public function deleteCategory(Request $request)
    {
        Category::where('group_id', 12)
            ->where('name', $request->get('query'))
            ->delete();
    }
}
