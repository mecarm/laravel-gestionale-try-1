<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Http\Controllers\Controller;
use App\Prospect;
use App\ProspectDocument;
use Illuminate\Http\Request;

class ProspectDashboardController extends Controller
{
    public function index(Prospect $prospect, ProspectDocument $documents)
    {
        return view('admin.prospects.prospect.index', ['prospect' => $prospect, 'documents' => $documents]);
    }

    public function store(Request $request, Prospect $prospect)
    {


        $document = ProspectDocument::create([
            'prospect_id' => $prospect->id,
            'name' => $request->name,
            'notes' => $request->notes,
            'path' => $request->path
        ]);

        return redirect()->route('admin.prospects.prospect.dashboard', $prospect->id)->with('success', 'Successfully created document');
    }
}
