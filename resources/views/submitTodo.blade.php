@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit a ToDo</h1>
        </div>
        <div class="row">
            <form action="/todo" method="post">
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
                    <label for="title">Description</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="description" name="description" placeholder="Description" value="{{ old('description') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Name</label>
                    <select type="text" class="form-control @error('name') is-invalid @enderror" id="completed" name="completed">
                        <option value="0">Not finished</option>
                        <option value="1">Completed</option>
                    </select>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection