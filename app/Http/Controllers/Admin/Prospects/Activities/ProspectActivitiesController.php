<?php

namespace App\Http\Controllers\Admin\Prospects\Activities;


use App\Http\Controllers\Controller;
use App\Prospect;
use App\ProspectActivity;
use Illuminate\Http\Request;

class ProspectActivitiesController extends Controller
{
    public function index(Prospect $prospect) 
    {


        return view('admin.prospects.activities.index',
        ['activities' => ProspectActivity::prospectId($prospect->id)->latest()->paginate(10),
         'prospect' => $prospect]);
    }

    public function create(Prospect $prospect)
    {
        return view('admin.prospects.activities.create', compact('prospect'));
    }

    public function store(Request $request, Prospect $prospect)
    {

        $activity = ProspectActivity::create([
            'prospect_id' => $prospect->id,
            'communication_type' => $request->communication_type,
            'type' => $request->type,
            'notes' => $request->notes
        ]);

        return redirect()->route('admin.prospects.activities.dashboard', $prospect->id)->with('success', 'Successfully created activity');
    }

    public function show(Prospect $prospect, ProspectActivity $activity)
    {
        return view('admin.prospects.activities.show', ['prospect' => $prospect, 'activity' => $activity]);
    }
}
