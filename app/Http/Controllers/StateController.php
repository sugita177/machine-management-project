<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\State;

class StateController extends Controller
{
    public function index() {
        $states = State::all();
        return view('state.index', compact('states'));
    }

    public function create() {
        return view('state.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required | max:20',
            'remark' => 'max:400'
        ]);

        $state = State::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function show(State $state) {
        return view('state.show', compact('state'));
    }

    public function edit(State $state) {
        $states = State::all();
        return view('state.edit', compact('state', 'states'));
    }

    public function update(Request $request, State $state) {
        $validated = $request->validate([
            'remark' => 'max:400'
        ]);

        $state->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, State $state) {
        $state->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('state.index');
    }
}
