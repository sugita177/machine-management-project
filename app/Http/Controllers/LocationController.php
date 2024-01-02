<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Location;

class LocationController extends Controller
{
    public function index() {
        $locations = Location::all();
        return view('location.index', compact('locations'));
    }

    public function create() {
        return view('location.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required | max:20',
            'address' => 'max:200',
            'remark' => 'max:400'
        ]);

        $location = Location::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function show(Location $location) {
        return view('location.show', compact('location'));
    }

    public function edit(Location $location) {
        $locations = Location::all();
        return view('location.edit', compact('location', 'locations'));
    }

    public function update(Request $request, Location $location) {
        $validated = $request->validate([
            'address' => 'max:200',
            'remark' => 'max:400'
        ]);

        $location->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, Location $location) {
        $location->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('location.index');
    }
}
