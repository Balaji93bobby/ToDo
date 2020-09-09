@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div>
                        <ul>
                            <li><a href="/assign"> Assign Todos </a></li>
                            <li><a href="/submitTodo"> Submit Todo </a></li>
                            <li><a href="/todos"> List Todos </a></li>
                            <li><a href="/submit"> Submit Task </a></li>
                            <li><a href="/tasks"> List Tasks </a></li>
                            <li><a href="/travel"> Travel List </a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
