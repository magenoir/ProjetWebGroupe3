@include('header3')
@foreach ($products as $product)
  <div class="event-container">
  
  <div class="event-name">{{ $product->product_name }}</div>
  </div>  
    @endforeach

    @include('footer')
