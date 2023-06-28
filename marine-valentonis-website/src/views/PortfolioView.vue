<script setup lang="ts">
import RuneCaster from '@/components/RuneCaster.vue';
import Collapsible from '@/components/Collapsible.vue';
import TeaMe from '@/components/TeaMe.vue';
import WebpagePreview from '@/components/WebpagePreview.vue';
import NextJs from '@/static/images/nextjs.svg';
import NodeJs from '@/static/images/nodejs.png';
import Wordpress from '@/static/images/wordpress-logo.png';

</script>';

<template>
  <div class="projects-view-wrapper">
    <Collapsible v-bind:collapsibleTitle="'PCT WooCommerce Suite'" :items="[
        {logo: NodeJs, name: ''}, 
        {logo: Wordpress, name: ''}, 
        {name: 'AJAX REST APIs'}, 
        {name: 'UI & UX Update'}
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
