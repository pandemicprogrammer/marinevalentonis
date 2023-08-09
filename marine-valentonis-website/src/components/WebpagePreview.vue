<template>
  <div>
    
    <iframe :src="previewUrl"></iframe>
    
  </div>
</template>
<script lang="ts">
export default {
  props: {
    url: {
      type: String,
      required: true,
    },
  },
  computed: {
    previewUrl(): string {
      return this.url;
    },
  },
};
</script>





