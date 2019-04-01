@php( $images = $block->images('gallery', 'default') )
@if( $images && sizeof($images) )
  <div class="gallery">
    <ul class="slides">
    @foreach( $images as $item )
      <li class="glide__slide">
        <img src="{{ $item }}" alt="">
      </li>
    @endforeach
    </ul>
  </div>
@endif
