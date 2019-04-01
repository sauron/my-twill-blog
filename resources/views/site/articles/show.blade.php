<div class='hero'>
  @if( $item->hasImage('hero_image'))
    <img src="{{ $item->image('hero_image', 'default') }}">
  @endif
  <h1>{{ $item->title }}</h1>
  <p>{{ $item->description }}</p>
</div>

