<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Products::get();

        if ($data == null) {
            return view("Data Not found");
        }

        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $result = Products::create($validated);

        if (!$result) {
            return response()->json([
                'message' => 'Add Succesfully',
            ], 500);
        }

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Add Succesfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Products::where('id', $id)->first();

        if (!$data) {
            return response()->json([
                'status' => 'Data Not Found',
            ], 404);

        }

        return response()->json([
            'status' => 'Success',
            'data' => $data,
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'deskription' => 'required',
            'price' => 'required',
        ]);

        $data = Products::find($id);

        if ($data == null) {
            return response()->json([
                'message' => 'todo not found.',
            ], 404);
        }

        $result = $data->update($validated);

        if ($result == false) {
            return response()->json([
                'message' => 'Failed',
            ]);
        }

        return response()->json([
            'message' => 'ok',
            'data' => $result,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Products::find($id);

        if ($data == null) {
            return response()->json([
                'message' => 'todo not found.',
            ], 404);
        }

        $result = $data->delete();

        if (!$result) {
            return response()->json([
                'status' => 'Delete Failed',
            ]);
        }

        return response()->noContent();
    }
}
