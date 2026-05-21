<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Monster;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Monster::with('types', 'size');

        $order = $request->input('order');

        if (in_array($order, ['asc', 'desc'])) {
            $query->orderBy('name', $order);
        }

        $monsters = $query->get();

        return response()->json([
            "success" => true,
            "data" => $monsters
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Monster $monster)
    {
        $monster->load('types', 'size');

        return response()->json(
            [
                "success" => true,
                "data" => $monster
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
