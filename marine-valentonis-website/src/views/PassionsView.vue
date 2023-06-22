<script setup lang="ts">
import Collapsible from '@/components/Collapsible.vue';
import BlogMe from '@/components/BlogMe.vue'
</script>

<template>
  <div class="passion-view-wrapper">
    <Collapsible collapsibleTitle="Musings">
      <BlogMe/>
    </Collapsible>
    
  </div>
</template>

<style>
.projects-view-wrapper {
  z-index: 5;
}
</style>
