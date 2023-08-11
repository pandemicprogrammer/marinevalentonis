<script setup lang="ts">
import RuneCaster from '@/components/RuneCaster.vue';
import TeaMe from '@/components/TeaMe.vue';
import Collapsible from '@/components/Collapsible.vue';

</script>

<template>
  <div class="passion-view-wrapper">
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
