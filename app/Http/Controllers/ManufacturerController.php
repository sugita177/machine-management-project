<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function index() {
        $manufacturers = Manufacturer::all();
        return view('manufacturer.index', compact('manufacturers'));
    }

    public function create() {
        return view('manufacturer.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required | max:20',
            'remark' => 'max:400'
        ]);

        $manufacturer = Manufacturer::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function show(Manufacturer $manufacturer) {
        return view('manufacturer.show', compact('manufacturer'));
    }

    public function edit(Manufacturer $manufacturer) {
        $manufacturers = Manufacturer::all();
        return view('manufacturer.edit', compact('manufacturer', 'manufacturers'));
    }

    public function update(Request $request, Manufacturer $manufacturer) {
        $validated = $request->validate([
            'remark' => 'max:400'
        ]);

        $manufacturer->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, Manufacturer $manufacturer) {
        $manufacturer->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('manufacturer.index');
    }
}
