@extends('base')


@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h2 class="display-5 mb-0">{{ $countDonor }}</h2>
                        <h4 class="lead">Total Donors</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <h2 class="display-5 mb-0">{{ $countRequest }}</h2>
                        <h4 class="lead">Total Requesters</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 d-block-inline">
                @foreach ($states as $item)
                <div class="col-3 my-1">
                    <a href="" class="btn @if($loop->even) btn-primary @else btn-info @endif py-3 w-100">
                        {{ $item->name }}
                        <p class="small m-0">Total Donors: {{ $item->donor }}</p>
                        <p class="small m-0">Total Requesters: 30</p>
                    </a>
                </div>
                @endforeach
        </div>
    </div>
    
@endsection