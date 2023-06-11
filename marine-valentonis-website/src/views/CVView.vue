
<script setup lang="ts">
import InputLog from '@/components/InputLog.vue';
</script>

<template>
  <div class="cv-wrapper">
    <h1>side column timeline style with projects, interactive hovers that link to individual project page</h1>
  </div>
  <InputLog />
  <div class="social-icons">    

</div>

</template>

<style>
  .cv-wrapper {
   text-align: left;
  }
  .social-icons {
    position: fixed;
    z-index: 999;
    bottom: 2rem;
    background: rgb(255, 255, 255, 75%);
    right: 46%;
    border-radius: 1rem;
    height: 3rem;
  }
  .social-icon {
    width: 3rem;
  }

</style>
