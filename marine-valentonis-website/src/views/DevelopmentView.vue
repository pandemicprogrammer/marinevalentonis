
<script setup lang="ts">
import InputLog from '@/components/InputLog.vue';
import Collapsible from '@/components/Collapsible.vue';

</script>

<template>
  <div class="development-page-wrapper">
   <Collapsible collapsibleTitle="GitHub PR & Release Log">
      <InputLog />
   </Collapsible>
</div>

</template>

<style>
  .cv-wrapper {
   text-align: left;
  }

</style>
