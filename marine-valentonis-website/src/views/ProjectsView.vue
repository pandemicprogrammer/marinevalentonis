<script setup lang="ts">
import RuneCaster from '@/components/RuneCaster.vue';
import Collapsible from '@/components/Collapsible.vue';


</script>
<template>
  <div class="projects-view-wrapper">
      <Collapsible collapsibleTitle="RuneCaster">
        <RuneCaster/>
      </Collapsible>
  </div>
</template>

<style>
.projects-nav {
  height: 100vh;
  justify-content: space-evenly;
  display: flex;
  flex-flow: column;
}
@media (min-width: 1024px) {
  .about {
    min-height: 100vh;
    display: flex;
    align-items: center;
  }
}
</style>
