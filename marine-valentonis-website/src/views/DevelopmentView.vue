
<script setup lang="ts">
import InputLog from '@/components/InputLog.vue';
import Collapsible from '@/components/Collapsible.vue';

</script>

<template>
  <div class="development-page-wrapper">
    <a href="https://github.com/pandemicprogrammer">
      <Collapsible collapsibleTitle="GitHub PR & Release Log" >
      <InputLog />
   </Collapsible></a>
   
</div>

</template>

<style>
  .cv-wrapper {
   text-align: left;
  }

</style>
