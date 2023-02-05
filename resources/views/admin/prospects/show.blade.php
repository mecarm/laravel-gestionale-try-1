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
    </div>
@endsection