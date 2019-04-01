<div class="image_with_text">
  @if( $block->hasImage('cover', 'default') )
    <div>
      <img src="{{ $block->image('cover', 'default') }}" />
    </div>
  @endif
  <div>
  {{ $block->translatedinput('image_subtitle') }}
  </div>
</div>
