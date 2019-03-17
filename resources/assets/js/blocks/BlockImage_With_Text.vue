<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image" name="medias.cover" > <a17-mediafield :name="fieldName('cover')" crop-context="cover" >Minimum image width 1300px</a17-mediafield> </a17-inputframe><a17-locale type="a17-textfield" :attributes="{ label: 'Image Subtitle (translated)', name: fieldName('image_subtitle'), type: 'textarea', required: true, placeholder: 'Description.', maxlength: 250, inStore: 'value' }" ></a17-locale>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
