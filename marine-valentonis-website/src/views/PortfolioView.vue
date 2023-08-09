<script setup lang="ts">
import RuneCaster from '@/components/RuneCaster.vue';
import Collapsible from '@/components/Collapsible.vue';
import TeaMe from '@/components/TeaMe.vue';
import WebpagePreview from '@/components/WebpagePreview.vue';
import DynamicDivFocus from '@/components/DynamicDivFocus.vue';
import { ref } from 'vue';

const items = ref([
  { text: "Text for overlay 1", x: 100, y: 50, width: 50, height: 80 },
  { text: "Text for overlay 2", x: 607, y: 88, width: 80, height: 250 },
]);
</script>

<template>
  <div class="projects-view-wrapper">
    <Collapsible v-bind:collapsibleTitle="'Person Centered Tech'">
      <div class="woocommerce-wrapper">
        <img class="desktop-view-image" src="../static//images//devices/desktopMarketplaceView.png" alt="">
         <DynamicDivFocus
            v-for="(item, index) in items"
            :key="index"
            :overlayText="item.text"
            :x="item.x"
            :y="item.y"
            :width="item.width"
            :height="item.height"
            classModifier="custom-class"
          />
              <a class="marketplace-anchor" href="https://personcenteredtech.com/marketplace" target="_blank">Click Here To View Live
              </a>
            <div class="development-info">
              <ul>
                <li>Slack API GitHub deployment integration</li>
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
.woocommerce-wrapper {
  display: flex;
  flex-flow: wrap;
  background-color: rgb(255, 255, 255, .1);
  border-radius: 3px;
  width: 100%;
  justify-content: space-evenly;
  margin: 5px;
}
.desktop-view-image {
  width: 100%;
}
</style>
