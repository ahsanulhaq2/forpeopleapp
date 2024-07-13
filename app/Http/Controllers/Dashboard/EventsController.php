<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $title = 'Events Partnership';
        $events = Partnership::where('status', 1)->get();

        return view('dashboard.pages.events.index', compact('events', 'title'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Partnership $partnership)
    {
    }

    public function edit(Partnership $partnership)
    {
    }

    public function update(Request $request, Partnership $partnership)
    {
    }

    public function destroy(Partnership $partnership)
    {
    }
}
