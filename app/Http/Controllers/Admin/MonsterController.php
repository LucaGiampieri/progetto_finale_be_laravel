<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Monster;
use App\Models\MonsterSize;
use App\Models\MonsterType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MonsterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monsters = Monster::all();

        return view('monsters.index', compact('monsters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = MonsterType::all();
        $sizes = MonsterSize::all();

        return view('monsters.create', compact('types', 'sizes'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newMonster = new Monster();

        $newMonster->name = $data['name'];
        $newMonster->monster_size_id = $data['monster_size_id'];
        $newMonster->description = $data['description'];

        $img_url = Storage::putFile('monsters', $data['image']);
        $newMonster->image = $img_url;

        $newMonster->save();

        if ($request->has('types')) {
            $newMonster->types()->sync($data['types']);
        };

        return redirect()->route('monsters.show', $newMonster);

    }

    /**
     * Display the specified resource.
     */
    public function show(Monster $monster)
    {
        return view('monsters.show', compact('monster'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Monster $monster)
    {
        $types = MonsterType::all();
        $sizes = MonsterSize::all();

        return view('monsters.edit', compact('types', 'sizes', 'monster'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Monster $monster)
    {
        $data = $request->all();

        $monster->name = $data['name'];
        $monster->monster_size_id = $data['monster_size_id'];
        $monster->description = $data['description'];

        if ($request->hasFile('image')) {

            Storage::delete($monster->image);
            $path = Storage::putFile('monster', $request->file('image'));
            $monster->image = $path;
        }

        $monster->update();

        if ($request->has('types')) {
            $monster->types()->sync($data['types']);
        } else {
            $monster->types()->detach();
        };

        return redirect()->route('monsters.show', $monster);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monster $monster)
    {
        Storage::delete($monster->image);

        $monster->delete();

        return redirect()->route('monsters.index', $monster);
    }
}
