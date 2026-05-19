<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MonsterSize;
use Illuminate\Http\Request;

class MonsterSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monsterSizes = MonsterSize::all();

        return view('monsterSizes.index', compact('monsterSizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('monsterSizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newMonsterSize = new MonsterSize();

        $newMonsterSize->name = $data['name'];
        $newMonsterSize->description = $data['description'];

        $newMonsterSize->save();

        return redirect()->route('monsterSizes.show', $newMonsterSize);
    }

    /**
     * Display the specified resource.
     */
    public function show(MonsterSize $monsterSize)
    {
        return view('monsterSizes.show', compact('monsterSize'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MonsterSize $monsterSize)
    {
        return view('monsterSizes.edit', compact('monsterSize'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MonsterSize $monsterSize)
    {
        $data = $request->all();

        $monsterSize->name = $data['name'];
        $monsterSize->description = $data['description'];

        $monsterSize->update();

        return redirect()->route('monsterSizes.show', compact('monsterSize'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MonsterSize $monsterSize)
    {
        $monsterSize->monsters()->update([
            'monster_size_id' => null
        ]);

        $monsterSize->delete();

        return redirect()->route('monsterSizes.index', compact('monsterSize'));
    }
}
