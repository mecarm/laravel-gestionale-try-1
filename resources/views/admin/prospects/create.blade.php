@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="d-flex m-3">

                <h1>Create Prospect</h1>

                <div class="ml-auto">
                    <div class="dropdown-center">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Actions
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('admin.prospects.dashboard') }}">Dashboard</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                </div>
            </div>

            <div class="my-3">

                @if ($errors->count())
                <div class="alert alert-danger w-50 m-auto">
                    <ul>
                        @foreach ($errors->all() as $message)
                            <li>{{  $message  }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                
            
                <form action="{{ route('admin.prospects.store')}}" method="POST" class="w-75 m-auto">
                    @csrf
            
                    <div class="form group my-1">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
            
                    <div class="form group my-1">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
            
                    <div class="form group my-1">
                        <label for="">Profile Image</label>
                        <input type="file" class="form-control" name="profile_image">
                    </div>
            
                    <button class="btn btn-primary float-right my-3">Create Prospect</button>
                </form>
            </div>

        </div>
    </div>
@endsection