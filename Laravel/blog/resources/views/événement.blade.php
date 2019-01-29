
@include('header')

@foreach ($events as $event)
  <div class="event-container">
  <p>{{ $event->event_name }}</p>
  <div>{{$event->event_description}}</div>
  </div>  
    @endforeach
  
@include('footer')