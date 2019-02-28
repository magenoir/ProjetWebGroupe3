<div>

	<div class="affcomm">
	@foreach ($ideventcomment as $idevent) 	
	
	@if($event->user_id == idevent->user_id)
		<div class="commuser">
				<p><b>{{$idevent->user_name}} : </b></p>				
		</div>
		<div class="comment">
		<p>{{$event->comment}}</p>
		</div>
	@endif	
	@endforeach		
	</div>
	

	<form action="{{route('Commenter')}}" method="post">
	@csrf
	<label for="E-mail"><b>E-Mail :</b></label>
	<input class="ins" type="text" placeholder=" E-mail" name="E-mailc" required>
	<textarea class="textcomm" name="Comm" placeholder="Commenter" onkeyup="javascript:capaTextarea(this, 250);"></textarea>
	<button class="buttoncomm" type="submit">Envoyer</button>
	</form>

</div>