<div>
  @if(empty($filename))
  {{-- @if($shop->filename = " ") --}}
  <img src="{{ asset('images/no_image.jpg')}}">
  @else
  <img src="{{ asset('storage/shops/' . $filename)}}">
  @endif
</div>