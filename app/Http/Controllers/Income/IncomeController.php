<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function getIncomeCategories(Request $request)
    {
        $query = $request->get('query');
        $categories = Category::where('name','like','%'.$query.'%')->where('group_id', 12)->get();
        return response()->json($categories);
    }
}
