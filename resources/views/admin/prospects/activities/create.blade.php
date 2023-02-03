@extends('layouts.app')

@section('title', 'Create and Activity for' . $prospect->name)

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">

                    <h1>Create Activity <small class="text-muted">{{$prospect->name}}</small></h1>

                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-left">
                              <li><a class="dropdown-item" href="{{ route('admin.prospects.activities.dashboard', $prospect) }}">Activities Dashboard</a></li>
                            </ul>
                          </div>
                    </div>

                </div>
            </div>
        </div>
{{-- END CARD --}}

        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('admin.prospects.activities.store', $prospect) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="" class="col-md-3">Communication type</label>
                        <div class="col-md-9">
                            <select name="type" class="form-select">
                                <option selected disabled value="">Select a Communication type</option>
                                <option value="phone_call">Phone Call</option>
                                <option value="email">Email</option>
                                <option value="none">None</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Activity</label>
                        <div class="col-md-9">
                            <select name="type" class="form-select">
                                <option selected disabled value="">Select an Activity</option>
                                <option value="cold_outreach">Cold Outreach</option>    
                                <option value="first_contact">First Contact</option>    
                                <option value="demo">Demo</option>    
                                <option value="follow_up">Follow Up</option>    
                                <option value="document_signing">Document Signing</option>    
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Notes</label>
                        <div class="col-md-9">
                            <textarea name="notes" id="" cols="30" rows="10" class="form-control" placeholder="Enter in your notes"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Documents</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control-file" name="document" multiple>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Schedule Follow Up</label>
                        <div class="col-md-9">
                            <input type="datetime-local" class="form-control" name="followup_date">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Follow Up Reason</label>
                        <div class="col-md-9">
                            <select class="form-select" name="followup_reason">
                                <option selected disabled value="">Select a reason</option>
                                <option value="prospecting">Prospecting</option>
                                <option value="demo">Demo</option>
                                <option value="follow_up">Follow Up</option>
                                <option value="document_signing">Document Signing</option>
                                <option value="close_sale">Close Sale</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Follow Up Notes</label>
                        <div class="col-md-9">
                            <textarea name="followup_notes" id="" cols="30" rows="10" class="form-control" placeholder="Enter in your notes to help remind you of what to do for the next follow up"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-primary float-right">Add Activity</button>
                </form>
            </div>
        </div>
    </div>
@endsection