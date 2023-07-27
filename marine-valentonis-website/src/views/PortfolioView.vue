<script setup lang="ts">
import RuneCaster from '@/components/RuneCaster.vue';
import Collapsible from '@/components/Collapsible.vue';
import TeaMe from '@/components/TeaMe.vue';
import WebpagePreview from '@/components/WebpagePreview.vue';


</script>

<template>
  <div class="projects-view-wrapper">
    <Collapsible v-bind:collapsibleTitle="'PCT WooCommerce Suite'">
              <a class="marketplace-anchor" href="https://personcenteredtech.com/marketplace" target="_blank">Click Here To View Live
          <WebpagePreview :url="'https://personcenteredtech.com/marketplace'" class="marketplace-preview-wrapper"/></a>
      <div class="development-info">
        <ul>
          <li>Custom WooCommerce APIs</li>
          <li>New User Toggle Filter</li>
          <li>New Sidebar Navigation</li>
          <li>New Custom Cart Modal</li>
          <li>PCT WC Suite Global Site Integration</li>
          <li>Update To Responsive Design</li>
          <li>New Custom WooCommerce Cart</li>
          <li>Update Marketplace From Static PHP Codebase -> Dynamic Rendering With Javascript & Custom APIs</li>
        </ul>
      </div>
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
.development-info {
  color: white;
}
.marketplace-anchor {
  font-size: 150%;
  text-decoration: none;
  text-align: center;
}
</style>
