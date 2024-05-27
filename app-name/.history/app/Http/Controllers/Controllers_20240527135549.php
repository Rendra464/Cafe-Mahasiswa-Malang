<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;

class CoffeeController extends Controller
{
    public function storeRating(Request $request, $id) {
        $request->validate([
            'rating' => 'required|integer|min=1|max=5',
        ]);

        $coffee = Coffee::findOrFail($id);
        $coffee->rating = $request->input('rating');
        $coffee->save();

        return redirect()->back()->with('success', 'Rating successfully added.');
    }
}
