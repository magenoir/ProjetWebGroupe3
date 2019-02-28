@include('headercopy')        
@include('slide')
           @foreach ($actus as $actue)
           <div class="evenement">
            <img class="info" src="images/evenement.jpg" alt="Avatar" >
            <p><span>Événement :</span>{{$actue->event_name}}</p>
            <p>{{$actue->event_description}}</p>
            <img src="images/like.png" alt="imgevent" style="width: 50px;height: 50px;" >
           </div>
          @endforeach
      
@include('footer')