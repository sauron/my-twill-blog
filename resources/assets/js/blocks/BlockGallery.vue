<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Gallery" name="medias.gallery" > <a17-slideshow :name="fieldName('gallery')" :max="5" crop-context="gallery" >Minimum image width: 1500px</a17-slideshow> </a17-inputframe>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
