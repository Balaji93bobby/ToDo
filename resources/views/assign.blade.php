<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Vue js App</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://unpkg.com/vue-multiselect@2.1.0"></script>
<link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Assign') }}</div>

                <div class="card-body">
                    
                <div>
                <div>
                  <example-component></example-component>

                    <form action="/assignTodo" method="post">
                      @csrf
                      @if ($errors->any())
                          <div class="alert alert-danger" role="alert">
                              Please fix the following errors
                          </div>
                      @endif
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                          <label for="title">ToDo</label>
                          <drop-down-simple :options="{{$todos->toJson()}}" :multiple="false" ></drop-down-simple>
                          @error('title')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                          <label for="title">Users</label>
                          <drop-down :options="{{$users->toJson()}}" ></drop-down>
                          @error('title')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection        

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html> 