@extends('layouts.app')

@section('title', $prospect->name .  '\'s Dashboard')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h1>Prospect Dashboard <small class="text-muted">{{ $prospect->name }}</small></h1>
            </div>
        </div>
        {{-- Activities preview --}}
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h3>Recent Activity</h3>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-left">
                              <li><a class="dropdown-item" href="{{ route('admin.prospects.activities.create', $prospect->id) }}">Add an Activity</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <hr>
                <ul class="list-group list-group-flush">
                    @foreach (ProspectActivity::latest()->limit(5)->get() as $activity)
                    <li class="list-group-item list-group-item-action">
                        <h5>
                            <a href="{{ route('admin.prospects.activities.show', ['prospect' => $prospect->id, 'activity' => $activity->id])}}">
                                {{ ucwords(str_replace('_', ' ', $activity->type)) }}
                            </a>
                            <small class="text-muted float-right">
                                <em>{{ date('m F, Y - g:i A') }}</em>
                            </small>
                        </h5>
                    </li>
                    @endforeach
                </ul>
                
            </div>
        </div>
        {{-- Documents Preview --}}
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">

                    <h3>Prospect Documents</h3>

                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-left">
                              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addProspectDocumentModal">Add a Document</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <hr>
                <ul class="list-group list-group-flush">
                    @foreach ($documents::latest()->limit(5)->get() as $document)
                    <li class="list-group-item list-group-item-action">
                        <h5>
                            <a>
                                {{$document->name}}
                            </a>
                            {{-- <small class="text-muted float-right">
                                <em>{{ date('m F, Y - g:i A') }}</em>
                            </small> --}}
                        </h5>
                    </li>
                    @endforeach
                </ul>
                
            </div>
        </div>

        {{-- Add Documents Modal --}}
        {{-- Modal--}}
        <div class="modal fade" id="addProspectDocumentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add a Document for <span class="text-muted">{{ $prospect->name }}</span></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('admin.prospects.prospect.dashboard.store', $prospect)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">Document Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label for="">Document Notes</label>
                                <textarea class="form-control" name="notes" id="" cols="30" rows="10" placeholder="Add here some notes"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Document File</label>
                                <input class="form-control" type="file" name="path">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Store Document</button>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection