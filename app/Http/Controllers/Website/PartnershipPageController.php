<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartnershipRequest;
use App\Models\Partnership;
use Illuminate\Support\Facades\Storage;

class PartnershipPageController extends Controller
{
    public function index()
    {
        $title = 'Partnership';

        return view('website.pages.partnership.index', compact('title'));
    }

    public function store(StorePartnershipRequest $request)
    {
        try {
            $data = $request->validated();
            $data['user_id'] = auth()->user()->id;

            if ($request->hasFile('document')) {
                $document = $request->file('document');
                $documentName = time() . '.' . $document->getClientOriginalExtension();
                $destinationPath = Storage::disk('public')->path('document');
                $document->move($destinationPath, $documentName);

                $data['document'] = $documentName;
            }

            Partnership::create($data);

            return redirect()->route('partnership-page')->with('success', 'Your request has been sent. Thank you!');
        } catch (Exception $e) {
            // Log error jika perlu
            \Log::error('Failed to submit partnership request: ' . $e->getMessage());

            // Redirect dengan pesan error
            return redirect()->back()->with('error', 'Failed to submit proposal. Please try again.');
        }
    }
}
