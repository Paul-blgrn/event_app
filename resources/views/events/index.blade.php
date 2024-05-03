<h1>{{  $events->name }} à :
    @foreach($events->locations as $location)
        {{  $location->name  }}
        {{  $location->city->name  }}
    @endforeach

    </h1>
