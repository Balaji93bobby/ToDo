@extends('layouts.app')

@section('content')
<link href="{{asset('css/app.css')}}" rel="stylesheet">

<div id="app" class="content">
    <div class="container">
    <animation path="{{asset('animation.json')}}"></animation>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_uaYKb6.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
 
    </div>
    <example-component></example-component>

</div>
<script src="{{asset('js/app.js')}}"></script> 

 
@endsection
