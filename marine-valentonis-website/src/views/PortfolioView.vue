<script setup lang="ts">
import RuneCaster from '@/components/RuneCaster.vue';
import Collapsible from '@/components/Collapsible.vue';
import TeaMe from '@/components/TeaMe.vue';
import WebpagePreview from '@/components/WebpagePreview.vue';

</script>

<template>
  <div class="projects-view-wrapper">
    <Collapsible v-bind:collapsibleTitle="'Person Centered Tech'">
      <div class="woocommerce-wrapper">
        <h1 class="woocommerce-wrapper__title">WooCommerce Suite</h1>
        <img class="desktop-view-image" src="https://marinevalentonis.com/wp-content/themes/zeever/assets/desktopMarketplaceView.png" alt="" />
          
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
             <a class="marketplace-anchor" href="https://personcenteredtech.com/marketplace" target="_blank">Click Here To View Live
              </a>
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
  width: 50%;
}
.marketplace-anchor {
  font-size: 150%;
  text-decoration: none;
  text-align: center;
  width: 100%;
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
  width: 50%;
  height: fit-content;
}
.woocommerce-wrapper li {
  font-size: 90%;
}
.woocommerce-wrapper__title {
  font-family: 'Blankers';
  width: 100%;
  font-style: italic;
  text-align: center;
  opacity: 80%;
}
</style>
