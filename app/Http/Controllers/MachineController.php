<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use App\Models\Manufacturer;

class MachineController extends Controller
{
    public function index() {
        $machines = Machine::all();
        return view('machine.index', compact('machines'));
    }

    public function create() {
        $manufacturers = Manufacturer::all();
        return view('machine.create', compact('manufacturers'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required | max:20',
            'manufacturer_id' => 'required | integer',
            'model_number' => 'required | max:20',
            'remark' => 'max:400'
        ]);

        $machine = Machine::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function show(Machine $machine) {
        return view('machine.show', compact('machine'));
    }

    public function edit(Machine $machine) {
        $manufacturers = Manufacturer::all();
        return view('machine.edit', compact('machine', 'manufacturers'));
    }

    public function update(Request $request, Machine $machine) {
        $validated = $request->validate([
            'manufacturer_id' => 'required | integer',
            'model_number' => 'required | max:20',
            'remark' => 'max:400'
        ]);

        $machine->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, Machine $machine) {
        $machine->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('machine.index');
    }
}
