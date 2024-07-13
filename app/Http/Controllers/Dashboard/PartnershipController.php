<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    public function index()
    {
        $title = 'Proposal Partnership';
        $partnerships = Partnership::all();

        return view('dashboard.pages.partnership.index', compact('partnerships', 'title'));
    }

    public function updateStatus(Partnership $partnership, $status)
    {
        try {
            $partnership->status = $status;
            $partnership->save();

            return redirect()->back()->with('success', 'Status updated successfully');
        } catch (Exception $e) {
            // Redirect dengan pesan error
            return redirect()->back()->with('error', 'Failed to submit proposal. Please try again.');
        }
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
