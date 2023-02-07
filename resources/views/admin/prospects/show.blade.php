@extends('layouts.app')

@section('title', $prospect->name . '\'s view')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">

                    <h1>Prospect Show <small class="text-muted">{{ $prospect->name }}</small></h1>

                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-left">
                              <li><a class="dropdown-item" href="{{ route('admin.prospects.activities.dashboard', $prospect) }}">Activities Dashboard</a></li>
                              <li><a class="dropdown-item" href="{{ route('admin.prospects.dashboard', $prospect) }}">Dashboard</a></li>
                            </ul>
                          </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body row">
                <div class="col-sm-4">
                    {{--  Placeholder for image and option to change out just the image --}}
                    @if ($prospect->profile_image)
                        <img class="img-fluid" src="{{ Storage::url($prospect->profile_image) }}" alt="">    
                    @else
                        <img class="img-fluid" src="/img/user.png" alt="">
                    @endif
                </div>
                <div class="col-sm-8">
                    <h3>{{$prospect->name}}</h3>
                    <h5>{{$prospect->email}}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection