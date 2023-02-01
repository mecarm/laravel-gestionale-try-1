@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    
                    <h1>Prospects <small class="text-muted">Showing All Prospects</small></h1>

                    <div class="ml-auto">
                        <div class="dropdown-center">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{ route('admin.prospects.create') }}">Create Prospect</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div>
                    </div>
                </div>

                @if ($prospects->count())
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>

                @endif
            </div>
        </div>
    </div>
@endsection