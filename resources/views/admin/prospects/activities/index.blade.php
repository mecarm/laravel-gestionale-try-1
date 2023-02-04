@extends('layouts.app')

@section('title', $prospect->name . "'s profile activity")

@section('content')
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Prospect Activities <small class="text-muted">{{ $prospect->name }}</small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-left">
                              <li><a class="dropdown-item" href="{{ route('admin.prospects.prospect.dashboard', $prospect) }}">Prospect Dashboard</a></li>
                              <li><a class="dropdown-item" href="{{ route('admin.prospects.activities.create', $prospect) }}">Log Activity</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        {{-- End card --}}
        {{-- Links per paginate --}}
        {{ $activities->links() }}

        @foreach ($activities as $activity)
            <div class="card mt-3">
                <div class="card-body">
                    <div class="d-flex">

                        <div>
                            <h5>Activity type: {{  ucwords(str_replace('_', ' ', $activity->type)) }}</h5>
                            <h5>Communication type: {{  ucwords(str_replace('_', ' ', $activity->communication_type)) }}</h5>
                        </div>

                        <div class="ml-auto">
                            <h6><em>{{date('F d, Y - g:i A', strtotime($activity->created_at))}}</em></h6>
                        </div>

                    </div>

                    <hr class="bg-dark">
                    <h5>Notes:</h5>
                    <p>{{ $activity->notes }}</p>

                </div>
            </div>
        @endforeach
        
    </div>
@endsection