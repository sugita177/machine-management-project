<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Site;
use App\Models\Client;

class SiteController extends Controller
{
    public function index() {
        $sites = Site::all();
        return view('site.index', compact('sites'));
    }

    public function create() {
        $clients = Client::all();
        return view('site.create', compact('clients'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required | max:20',
            'address' => 'max:200',
            'client_id' => 'required | integer',
            'start_date' => 'date',
            'end_date' => 'date',
            'remark' => 'max:400'
        ]);

        $site = Site::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function show(Site $site) {
        return view('site.show', compact('site'));
    }

    public function edit(Site $site) {
        $clients = Client::all();
        return view('site.edit', compact('site', 'clients'));
    }

    public function update(Request $request, Site $site) {
        $validated = $request->validate([
            'name' => 'required | max:20',
            'address' => 'max:200',
            'client_id' => 'required | integer',
            'start_date' => 'date',
            'end_date' => 'date',
            'remark' => 'max:400'
        ]);

        $site->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, Site $site) {
        $site->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('site.index');
    }
}
