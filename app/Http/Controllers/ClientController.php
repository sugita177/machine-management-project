<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    public function create() {
        return view('client.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required | max:20',
            'remark' => 'max:400'
        ]);

        $client = Client::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function show(Client $client) {
        return view('client.show', compact('client'));
    }

    public function edit(Client $client) {
        return view('client.edit', compact('client'));
    }

    public function update(Request $request, Client $client) {
        $validated = $request->validate([
            'remark' => 'max:400'
        ]);

        $client->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, Client $client) {
        $client->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('client.index');
    }
}
