@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-6 p-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->Agency }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $train->departure_station }}</h6>
                        <p class="card-text">{{ $train->arrival_station }}</p>
                        <pre href="#" class="card-link">{{ $train->departure_time }}</pre>
                        <pre href="#" class="card-link">{{ $train->Arrival_time }}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
