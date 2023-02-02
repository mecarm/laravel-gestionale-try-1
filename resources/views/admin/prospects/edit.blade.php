@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="d-flex">
                <h1>Edit Prospect <small class="text-muted">{{ $prospect->name }}</small></h1>
                <div class="ml-auto">
                    <div class="dropdown-center">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('admin.prospects.dashboard') }}">View Dashoboard</a></li>
                          <li><a class="dropdown-item" href="{{ route('admin.prospects.show', ['prospect' => $prospect->id]) }}">View Prospect</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Update their name and email and profile image --}}
    <div class="row">
        <div class="col-sm-4">
            {{--  Placeholder for image and option to change out just the image --}}
            <div class="card mt-3">
                <div class="card-body">
                    @if ($prospect->profile_image)
                        <img src="{{ Storage::url($prospect->profile_image) }}" alt="">
                        
                    @else
                        <img class="img-fluid" src="/img/user.png" alt="">
                    @endif
                    <hr>
                    <button class="btn btn-outline-primary btn-sm btn-block">New Profile Image</button>
                    <button class="btn btn-outline-danger btn-sm btn-block">Delete Profile Image</button>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card mt-3">
                <div class="card-body">
                    <h5>Edit Personal Details</h5>
                    <hr>
        
                    @if ($errors->count())
                    <div class="alert alert-danger w-50 m-auto">
                        <ul>
                            @foreach ($errors->all() as $message)
                                <li>{{  $message  }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
        
                    <form action="{{ route('admin.prospects.update', ['prospect' => $prospect->id])}}" method="POST" class="w-75 m-auto">
                        @csrf
                        @method('PUT')
                
                        <div class="form group my-1">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $prospect->name }}">
                        </div>
                
                        <div class="form group my-1">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $prospect->email }}">
                        </div>
                
                        <button class="btn btn-primary float-right my-3">Update Prospect</button>
                    </form>
        </div>
    </div>
    

        </div>
    </div>

    {{-- Update or add their adress and contact details --}}
</div>
@endsection