<script setup lang="ts">
import RuneCaster from '@/components/RuneCaster.vue';
import Collapsible from '@/components/Collapsible.vue';
import TeaMe from '@/components/TeaMe.vue';
import WebpagePreview from '@/components/WebpagePreview.vue';
</script>

<template>
  <div class="projects-view-wrapper">
    <Collapsible collapsibleTitle="PCT WooCommerce Suite">
      <WebpagePreview :url="'https://personcenteredtech.com/marketplace'" class="marketplace-preview-wrapper"/>
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
