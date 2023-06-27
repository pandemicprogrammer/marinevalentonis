
<script setup lang="ts">
import LinkCarousel from '@/components/LinkCarousel.vue';
</script>

<template>
  <div class="community-page-wrapper">
    <LinkCarousel/>
  </div>
</template>

<style>
.community-page-wrapper {
  display: flex;
  justify-content: center;
  padding-top: 5rem;
  z-index: 5;
}
.page-overlay {
  z-index: 0;
  width: 100%;
  height: 100%;
  position: absolute !important;
  background-color: rgb(35,35,35,.5);
}
</style>
