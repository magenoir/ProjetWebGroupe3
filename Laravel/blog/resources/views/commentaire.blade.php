<div>
	<div class="affcomm">
		<div class="commuser">
			@foreach ($comments as $comment)
				<p>{{$comment->comment}}</p>
			@endforeach
		</div>
		<div class="comment">
			
		</div> 
	</div>
	<form action="{{route('Commenter')}}" method="post">
	@csrf
	<textarea class="textcomm" name="Comm" placeholder="Commenter" onkeyup="javascript:capaTextarea(this, 250);"></textarea>
	<button class="buttoncomm" type="submit">Envoyer</button>
	</form>
	
</div>