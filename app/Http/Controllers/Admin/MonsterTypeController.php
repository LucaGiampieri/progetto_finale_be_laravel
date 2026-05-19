<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MonsterType;
use Illuminate\Http\Request;

class MonsterTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monsterTypes = MonsterType::all();

        return view('monsterTypes.index', compact('monsterTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('monsterTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newMonsterType = new MonsterType();

        $newMonsterType->name = $data['name'];
        $newMonsterType->description = $data['description'];

        $newMonsterType->save();

        return redirect()->route('monsterTypes.show', $newMonsterType);
    }

    /**
     * Display the specified resource.
     */
    public function show(MonsterType $monsterType)
    {
        return view('monsterTypes.show', compact('monsterType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MonsterType $monsterType)
    {
        return view('monsterTypes.edit', compact('monsterType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MonsterType $monsterType)
    {
        $data = $request->all();

        $monsterType->name = $data['name'];
        $monsterType->description = $data['description'];

        $monsterType->update();

        return redirect()->route('monsterTypes.show', compact('monsterType'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MonsterType $monsterType)
    {
        $monsterType->monsters()->detach();

        $monsterType->delete();

        return redirect()->route('monsterTypes.index');
    }
}
