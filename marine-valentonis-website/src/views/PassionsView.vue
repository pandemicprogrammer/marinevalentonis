<script setup lang="ts">
import RuneCaster from '@/components/RuneCaster.vue';
import TeaMe from '@/components/TeaMe.vue';
import Collapsible from '@/components/Collapsible.vue';
import WebpagePreview from '@/components/WebpagePreview.vue';

</script>

<template>
  <div class="passion-view-wrapper">
     <Collapsible collapsibleTitle="FastCast Calculator">
      <p class="woocommerce-wrapper__tech">Vue</p>
                  <h1 class="project-title">Precious Metal Casting App </h1>
      <WebpagePreview :url="'https://fast-cast.netlify.app'" class="marketplace-preview-wrapper"/>
    </Collapsible>
    <Collapsible collapsibleTitle="RuneCaster">
      <p class="woocommerce-wrapper__tech">Vue</p>
      <RuneCaster/>
    </Collapsible>
    <Collapsible collapsibleTitle="TeaMe">
      <p class="woocommerce-wrapper__tech">Vue  |  Custom API</p>
      <TeaMe/>
    </Collapsible>
  </div>
</template>

<style>
.projects-view-wrapper {
  z-index: 5;
}
.project-title {
  font-family: 'Fogato';
  font-size: 100%;
}
.woocommerce-wrapper__tech {
  width: 100%;
  text-align: center;
  background-color: rgb(255,255,255,.08);
  border-radius: 2px;
  font-weight: 00;
  font-family: 'Ashfiana Regular';
  letter-spacing: 0px;
}
</style>
