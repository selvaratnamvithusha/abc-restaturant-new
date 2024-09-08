<?php

namespace App\Http\Controllers;
use App\Http\Resources\FoodResource;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ApiController extends Controller
{
    // Get all food items
    public function index()
    {
        $foods = Food::all();
        return FoodResource::collection($foods);
    }

    // Get a specific food item by id
    public function show($id)
    {
        $food = Food::findOrFail($id);
        return new FoodResource($food);
    }



    // POST: Create a new food item
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Handle the image upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('foodimage'), $imageName);

        // Create a new food item
        $food = Food::create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return new FoodResource($food);
    }


    public function update(Request $request, $id)
    {
        $food = Food::findOrFail($id);

        // Validate the request data
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric',
            'description' => 'sometimes|required|string',
            'image' => 'sometimes|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Update the image if provided
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($food->image) {
                Storage::delete(public_path('foodimage/' . $food->image));
            }

            // Store the new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('foodimage'), $imageName);
            $food->image = $imageName;
        }

        // Update other fields
        $food->update($request->only(['title', 'price', 'description']));

        return new FoodResource($food);
    }

    // DELETE: Remove a food item
    public function destroy($id)
    {
        $food = Food::findOrFail($id);

        // Delete the image
        if ($food->image) {
            Storage::delete(public_path('foodimage/' . $food->image));
        }

        // Delete the food item
        $food->delete();

        return response()->json(['message' => 'Food item deleted successfully'], 200);
    }
}
