<html>
<head>
    <title>Travel List</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
      <div id="app" class="content">
          <example-component></example-component>
      </div>
    <script src="{{asset('js/app.js')}}"></script> 

    <h1>My Travel Bucket List</h1>
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
</body>
</html>
