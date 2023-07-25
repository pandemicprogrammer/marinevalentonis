<script setup lang="ts">
import RuneCaster from '@/components/RuneCaster.vue';
import Collapsible from '@/components/Collapsible.vue';
import TeaMe from '@/components/TeaMe.vue';
import WebpagePreview from '@/components/WebpagePreview.vue';


</script>

<template>
  <div class="projects-view-wrapper">
    <Collapsible v-bind:collapsibleTitle="'PCT WooCommerce Suite'" :items="[
        // {logo: 'wp-content/themes/zeever/assets/nodejs.png', name: ''}, 
        // {logo: 'wp-content/themes/zeever/assets/wordpress.png', name: ''}, 
        // {name: 'AJAX REST APIs'}, 
        // {name: 'UI & UX Update'}
      ]"
>
      <WebpagePreview :url="'https://personcenteredtech.com/marketplace'" class="marketplace-preview-wrapper"/>
    </Collapsible>
    <Collapsible collapsibleTitle="FastCast Calculator">
      <WebpagePreview :url="'https://fast-cast.netlify.app'" class="marketplace-preview-wrapper"/>
    </Collapsible>
    <Collapsible collapsibleTitle="RuneCaster">
      <RuneCaster/>
    </Collapsible>
    <Collapsible collapsibleTitle="TeaMe">
      <TeaMe/>
    </Collapsible>
  </div>
</template>

<style>
.projects-view-wrapper {
  z-index: 5;
}
</style>
