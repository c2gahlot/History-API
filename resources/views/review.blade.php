@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Phone Details</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center-element">
                                    <img class="phone-thumb" src="{{asset($phone->image_url)}}">
                                    <hr>
                                </div>
                                <ul>
                                    <li><strong>Name : </strong>{{ $phone->name }}</li>
                                    <li><strong>Screen Size : </strong>{{ $phone->screen_size }} inches</li>
                                    <li><strong>Primary Camera : </strong>{{ $phone->primary_camera }} MP</li>
                                    <li><strong>Operating System : </strong>{{ $phone->operating_system }}</li>
                                    <li><strong>Battery Capacity : </strong>{{ $phone->battery_capacity }} mAh
                                    </li>
                                    <li><strong>Price : </strong>Rs {{ $phone->price }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
