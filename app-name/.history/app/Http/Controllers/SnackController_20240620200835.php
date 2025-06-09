<?php

namespace App\Http\Controllers;

use App\Models\Snack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SnackController extends Controller
{
    public function storeRating(Request $request, $id)
    {
        // Log the incoming request for debugging
        Log::info('Received rating request', ['id' => $id, 'data' => $request->all()]);

        // Validate the request data
        $validatedData = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'columnName' => 'required|string|in:Kentang_Goreng,Pisang_Nugget,Pentol,Nugget,Sosis,Tahu_Walik,Roti_Bakar,Cireng,Tahu_Bakso,Tempura,Pisang_Goreng_Ori',
            'ID' => 'required|integer|exists:users,id'
        ]);

        $columnName = $validatedData['columnName'];
        $rating = $validatedData['rating'];
        $SnackId = $validatedData['ID'];

        try {
            // Find the Snack item by ID
            $Snack = Snack::findOrFail($SnackId);

            // Update the rating column
            $Snack->$columnName = $rating;
            $Snack->save();

            // Return a success response
            return response()->json(['success' => true, 'message' => 'Rating successfully added']);
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error adding rating: '.$e->getMessage());

            // Return an error response
            return response()->json(['success' => false, 'message' => 'Error adding rating.'], 500);
        }
    }

    public function getRating(Request $request, $SnackId)
    {
        $ratingColumns = [
            'Kentang_Goreng',
            'Pisang_Nugget',
            'Pentol',
            'Nugget',
            'Sosis',
            'Tahu_Walik',
            'Roti_Bakar',
            'Cireng',
            'Tahu_Bakso',
            'Tempura',
            'Pisang_Goreng_Ori',
            'Telur'
        ];

        $columnName = $request->input('columnName');

        if (!in_array($columnName, $ratingColumns)) {
            Log::info('Invalid column name', ['column_name' => $columnName]);
            return response()->json(['error' => 'Invalid column name'], 400);
        }

        $Snack = Snack::find($SnackId);
        if ($Snack) {
            if ($Snack->$columnName !== null) {
                $rating = $Snack->$columnName;
                Log::info('Rating found', ['SnackId' => $SnackId, 'column' => $columnName, 'rating' => $rating]);
                return response()->json(['column' => $columnName, 'rating' => $rating]);
            } else {
                Log::info('No rating found for Snack', ['SnackId' => $SnackId, 'column' => $columnName]);
                return response()->json(['error' => 'No rating found for Snack'], 404);
            }
        } else {
            Log::info('Snack not found', ['SnackId' => $SnackId]);
            return response()->json(['error' => 'Snack not found'], 404);
        }
    }
}
