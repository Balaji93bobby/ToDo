@extends('layouts.app')
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>

@section('content')
<div class="uk-section uk-section-small uk-section-muted">
    <div class="uk-container">
        @if (session('status'))
            <div class="uk-alert uk-alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h1>You are logged in</h1>
        <div>
            <ul>
                <li><a href="/animation"> Animation </a></li>
                <li><a href="/assign"> Assign Todos </a></li>
                <li><a href="/myTodos"> My Todos </a></li>
                <li><a href="/submitTodo"> Submit Todo </a></li>
                <li><a href="/todos"> List Todos </a></li>
                <li><a href="/submit"> Submit Task </a></li>
                <li><a href="/tasks"> List Tasks </a></li>
                <li><a href="/travel"> Travel List </a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
