@extends('layouts.app')

@section('title', $prospect->name .  '\'s Dashboard')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h1>Prospect Dashboard <small class="text-muted">{{ $prospect->name }}</small></h1>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h3>Recent Activity</h3>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-left">
                              <li><a class="dropdown-item" href="{{ route('admin.prospects.activities.create', $prospect->id) }}">Add an Activity</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <hr>

                @foreach (ProspectActivity::latest()->limit(5)->get() as $activity)
                    <h6>{{ $activity->type }}</h6>
                @endforeach
            </div>
        </div>
    </div>
@endsection