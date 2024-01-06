<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Situation;
use App\Models\Machine;
use App\Models\State;
use App\Models\Location;
use App\Models\Site;


class SituationController extends Controller
{
    public function index() {
        $situations = Situation::all();
        return view('situation.index', compact('situations'));
    }


    public function create() {
        $machines = Machine::all();
        $states = State::all();
        $locations = Location::all();
        $sites = Site::all();
        return view('situation.create', compact('machines', 'states', 'locations', 'sites'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'machine_id' => 'required | integer',
            'state_id' => 'required | integer',
            'location_id' => 'required | integer',
            'site_id' => 'integer',
            'start_date' => 'required | date',
            'end_date' => 'date',
            'stuff' => 'max:20',
            'remark' => 'max:400'
        ]);

        $validated['user_id'] = auth()->id();

        $situation = Situation::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function show(Situation $situation) {
        return view('situation.show', compact('situation'));
    }

    public function edit(Situation $situation) {
        $machines = Machine::all();
        $states = State::all();
        $locations = Location::all();
        $sites = Site::all();
        return view('situation.edit', compact('situation', 'machines', 'states', 'locations', 'sites'));
    }

    public function update(Request $request, Situation $situation) {
        
        $validated = $request->validate([
                'state_id' => 'required | integer',
                'location_id' => 'required | integer',
                'site_id' => 'integer',
                'start_date' => 'required | date',
                'end_date' => 'date',
                'stuff' => 'max:20',
                'remark' => 'max:400'
        ]);

        $validated['user_id'] = auth()->id();
        

        $situation->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, Situation $situation) {
        $situation->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('situation.index');
    }
}
