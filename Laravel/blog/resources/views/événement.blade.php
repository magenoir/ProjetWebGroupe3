@include('headercopy')
  
  @foreach($events as $event)
    <div class="evenement">
      <img class="info" src="images/evenement.jpg" alt="Avatar" >
       
      <p><span>Événement : {{$event->event_name}}</span></p>
      
      <p>{{$event->event_description}}</p>   
      
        <!--<img src="images/like.png" style="width: 50px;height: 50px;"> -->
        <!--include('like') -->
        <div>

            <div class="affcomm">
            @foreach ($ideventcomment as $idevent) 	
              <div class="commuser">
                  <p><b>{{$idevent->user_name}} : </b></p>				
              </div>
                      
              <div class="comment">
              <p>{{$idevent->comment}}</p>
              </div>
              
            @endforeach		
            </div>
            
            @if(Auth::user())
            <form action="{{route('Commenter')}}" method="post">
            @csrf
            <label id="E-mail"><b>E-Mail :</b></label>
            <input class="ins" type="text" placeholder=" E-mail" name="E-mailc" required>
            <textarea class="textcomm" name="Comm" placeholder="Commenter" onkeyup="javascript:capaTextarea(this, 250);"></textarea>
            <button class="buttoncomm" type="submit">Envoyer</button>
            </form>
              
          </div>
          @endif 
          
    </div>
   
  @endforeach
     
  
@include('footer')  