<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-locale type="a17-wysiwyg" :attributes="{ label: 'Paragraph', name: fieldName('paragraph'), note: 'You can edit the source.', maxlength: 200, editSource: true, inStore: 'value' }" ></a17-locale>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
