<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apiCategoriesModel as Categories;

class apiCategoriesController extends Controller
{
    public function index()
    {
        return Categories::all();
    }
    public function show($id)
    {
        return Categories::find($id);
    }

    public function destroy($id){
        $Categories = Categories :: find($id);
       
        $Categories->delete();
        return response()->json(null, 204);
    }
    public function update(Request $request, $id)
        {
            $Categories = Categories::find($id);
            $validated = $request->validate([
                'name' => 'required|string|max:255',

            ]);

            $Categories->update($validated);

          
            return response()->json($Categories);
        }

    public function store(Request $request){
      
        $Categories= Categories :: create($request->all());
        
        return response()->json($Categories, 201);


    }
}
