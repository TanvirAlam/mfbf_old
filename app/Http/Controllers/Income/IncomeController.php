<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function getIncomeCategories(Request $request)
    {
        $query = $request->get('query');
        $categories = Category::where('name','like','%'.$query.'%')->get();
        return response()->json($categories);
    }

    public function saveIncomeCategory(Request $request, Income $income)
    {
        $request->validate([
            'query' => 'required|string'
        ]);

        $income->category->group_id = 12;
        $income->category->name = $request->get('query');
        $income->category->save();
    }
}
