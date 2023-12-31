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

    public function show(Machine $machine) {
        return view('machine.show', compact('machine'));
    }

    public function edit(Machine $machine) {
        $manufacturers = Manufacturer::all();
        return view('machine.create', compact('machine', 'manufacturers'));
    }
}
