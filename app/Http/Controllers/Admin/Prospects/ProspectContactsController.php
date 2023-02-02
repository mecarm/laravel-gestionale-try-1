<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Prospects\Contacts\StoreContactRequest;
use App\Prospect;
use App\ProspectContact;
use Illuminate\Http\Request;

class ProspectContactsController extends Controller
{
    public function create(Prospect $prospect) {

        return view('admin.prospects.contacts.create', compact('prospect'));
    }

    public function store(StoreContactRequest $request, Prospect $prospect) {

        $contact = ProspectContact::updateOrCreate(['prospect_id' => $prospect->id], $request->validated());

        return redirect()->route('admin.prospects.show', $prospect->id)->with('success', 'Successfully created a new prospect!');
    }
}
