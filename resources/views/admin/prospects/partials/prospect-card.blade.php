<div class="card mt-3 prospect-card">
    <div class="card-body">
        <div class="row justify-content-between">
            <div class="col-sm-3 col-md-2">
                @if ($prospect->profile_image)
                    <img class="img-fluid" src="{{ Storage::url($prospect->profile_image) }}" alt="profile image">
                @else
                    <img class="img-fluid" src="/img/user.png" alt="">
                @endif
            </div>
            <div class="col-sm-6">
                <h5>{{ $prospect->name }}</h5>
                <ul>
                    <li>
                        <strong>Email:</strong> {{ $prospect->email }}
                    </li>
                    <li>
                        <strong>Registration date:</strong> {{ $prospect->pretty_created }}
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="dropdown-center d-block">
                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle float-right" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Actions
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('admin.prospects.edit', ['prospect' => $prospect->id]) }}">Edit Prospect</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
</div>