@include('header3')
@foreach ($products as $product)
<div class="evenement">
    <img class="info" src="images/pull.png" >
    <p>{{$product->product_name}}</p>
    <p>{{$product->product_price}} €</p>
    <img src="images/like.png" style="width: 50px;height: 50px;" alt="like">
  </div>
@endforeach

@include('footer')
