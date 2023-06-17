<template>
  <div>
    <iframe :src="previewUrl"></iframe>
  </div>
</template>

<script>
export default {
  props: {
    url: {
      type: String,
      required: true,
    },
  },
  computed: {
    previewUrl() {
      return this.url;
    },
  },
};
</script>
