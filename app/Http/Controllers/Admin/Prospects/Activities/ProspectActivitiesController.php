<?php

namespace App\Http\Controllers\Admin\Prospects\Activities;

use App\Http\Controllers\Controller;
use App\Prospect;
use Illuminate\Http\Request;

class ProspectActivitiesController extends Controller
{
    public function index(Prospect $prospect) 
    {
        return view('admin.prospects.activities.index', compact('prospect'));
    }

    public function create(Prospect $prospect)
    {
        return view('admin.prospects.activities.create', compact('prospect'));
    }
}
