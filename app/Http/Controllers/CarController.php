<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function availableCars(Request $request)
    {
        $user = User::find(2);

        $id = $user->position->categories->first()->id;

        $query = Car::where('category_id', $id)
                    ->with(['category', 'driver']);
        
        if ($request->filled('name')) {
            $query->where('name', 'like', "%{$request->name}%");
        }

        $cars = $query->get();

        return response()->json([
            'message' => $cars
        ]);
    }
}
