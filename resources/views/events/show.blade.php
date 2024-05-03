<h1>{{  $event->name }} à :

@foreach($event->locations as $location)
    {{  $location->city->name  }}
@endforeach

</h1>
<p>{{ $event->description }}</p>
