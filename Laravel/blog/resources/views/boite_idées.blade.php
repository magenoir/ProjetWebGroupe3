@include('header4')


<style type="text/css">
	.desc {
	  width: 100%;
	  height: 100px;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #999;
	  border-radius: 0.2em;
	  box-sizing: border-box;
	}
	.contient {
	  padding: 16px;
	  text-align: center;
	}
</style>

@foreach ($ideas as $idea)
<div class="evenement">
	<img src="images/evenement.jpg" alt="Avatar" > 
	<p><span>{{$idea->event_name}}</span></p>
	<p>{{$idea->event_description}}</p>
</div>
@endforeach


@include('footer')