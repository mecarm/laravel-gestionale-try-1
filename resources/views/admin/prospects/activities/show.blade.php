@extends('layouts.app')

@section('title', $prospect->name . ' Activity')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">

                    <h1>{{ $prospect->name }} <small class="text-muted">{{ ucwords(str_replace('_', ' ', $activity->type)) }}</small></h1>

                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li><a class="dropdown-item" href="{{ route('admin.prospects.activities.dashboard', $prospect) }}">View all Activity</a></li>
                              <li><a class="dropdown-item" href="{{ route('admin.prospects.prospect.dashboard', $prospect) }}">Prospects Dashboard</a></li>
                            </ul>
                          </div>
                    </div>
                </div>

                <hr>

                <h5>Communication Type: {{  ucwords(str_replace('_', ' ', $activity->communication_type)) }}</h5>
                <h5>Notes:</h5>
                <p>{{ $activity->notes }}</p>

                <h5 class="float-right"><small class="text-muted">{{ $activity->pretty_created }}</small></h5>
            </div>
        </div>
    </div>
@endsection