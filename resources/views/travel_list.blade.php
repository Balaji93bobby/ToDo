@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Travel Bucket List') }}</div>

                <div class="card-body">
                    
                <h2>Places I'd Like to Visit</h2>
                <ul>
                @foreach ($togo as $newplace)
                  <li>{{ $newplace->name }}</li>
                @endforeach
                </ul>

                <h2>Places I've Already Been To</h2>
                <ul>
                    @foreach ($visited as $place)
                          <li>{{ $place->name }}</li>
                    @endforeach
                </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>

<link href="{{asset('css/app.css')}}" rel="stylesheet">

<div id="app" class="content">
    <example-component></example-component>
</div>
<script src="{{asset('js/app.js')}}"></script> 



@endsection
