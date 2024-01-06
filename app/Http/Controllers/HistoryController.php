<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\History;
use App\Models\Machine;
use App\Models\State;
use App\Models\Location;
use App\Models\Site;

class HistoryController extends Controller
{
    public function index() {
        $histories = History::all();
        return view('history.index', compact('histories'));
    }

    public function index_one_machine(Machine $machine) {
        $histories = History::where('machine_id', $machine->id)->get();
        return view('history.index', compact('histories'));
    }

    //public function index_latest() {
    //    $machines = Machine::all();
    //    $histories_latest = [];
    //    foreach($machines as $machine) {
    //        $history_latest = History::where('machine_id', $machine->id)
    //                                    ->sortByDesc('start_date')
    //                                    ->first();
    //        if(isset($histories_latest)) {
    //            $histories_latest[] = $history_latest;
    //        }
    //    }
    //    return view('history.index', compact('histories_latest'));
    //}

    public function create() {
        $machines = Machine::all();
        $states = State::all();
        $locations = Location::all();
        $sites = Site::all();
        return view('history.create', compact('machines', 'states', 'locations', 'sites'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            //TODO:
            'name' => 'required | max:20',
            'manufacturer_id' => 'required | integer',
            'model_number' => 'required | max:20',
            'remark' => 'max:400'
        ]);

        $history = History::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function show(History $history) {
        return view('history.show', compact('history'));
    }

    public function edit(History $history) {
        $machines = Machine::all();
        $states = State::all();
        $locations = Location::all();
        $sites = Site::all();
        return view('history.edit', compact('history', 'machines', 'states', 'locations', 'sites'));
    }

    public function update(Request $request, History $history) {
        $validated = $request->validate([
            //TODO:
            'manufacturer_id' => 'required | integer',
            'model_number' => 'required | max:20',
            'remark' => 'max:400'
        ]);

        $history->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, History $history) {
        $history->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('history.index');
    }
}
