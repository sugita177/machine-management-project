<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Machine;

class MachineController extends Controller
{
    public function index() {
        $machines = Machine::all();
        return view('machine.index', compact('machines'));
    }
}
