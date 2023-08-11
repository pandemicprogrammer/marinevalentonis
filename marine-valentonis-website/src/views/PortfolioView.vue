<script setup lang="ts">
import Collapsible from '@/components/Collapsible.vue';
import WebpagePreview from '@/components/WebpagePreview.vue';

</script>

<template>
  <div class="projects-view-wrapper">
    <Collapsible v-bind:collapsibleTitle="'Person Centered Tech'">
      <div class="woocommerce-wrapper">
        <h1 class="woocommerce-wrapper__title">WooCommerce Suite</h1>
        <p class="woocommerce-wrapper__tech">Javascript | PHP | AJAX</p>
        <div class="woocommerce-wrapper__devices">
          <img class="mobile-view-image" src="https://marinevalentonis.com/wp-content/themes/zeever/assets/mobileView.png" alt="" />
        <img class="desktop-view-image" src="https://marinevalentonis.com/wp-content/themes/zeever/assets/desktopMarketplaceView.png" alt="" />
    </div>
        
        <div class="development-info">
              <ul>
                <li><sup class="link__new">New</sup> User Type Toggle Filter</li>
                <li><sup class="link__new">New</sup> Sidebar Navigation</li>
                <li><sup class="link__new">New</sup> Custom Cart Modal</li>
                <li><sup class="link__new">New</sup> Custom WooCommerce Cart</li>
                <li><sup class="link__new">New</sup> Responsive Design</li>
                <li><sup class="link__new">New</sup> Custom WooCommerce APIs</li>
                <li><sup class="link__new">New</sup> PCT WC Suite Global Site Integration</li>
                <li><sup class="link__new">New</sup> Static Codebase &rarr; Dynamic and Scalable Codebase</li>
              </ul>
            </div>
             <a class="marketplace-anchor" href="https://personcenteredtech.com/marketplace" target="_blank">Click Here To View Live
              </a>
            </div>
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
  display: flex;
  align-items: center;
}
.marketplace-anchor {
  font-size: 2rem;
  text-decoration: none;
  text-align: center;
  width: 100%;
  font-family: "Fogato";
  font-weight: 800;
  letter-spacing: 2px;
  border-radius: 0px;
  background-color: rgb(255,255,255,.08);
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
  height: fit-content;
  margin-top: 2rem;
}
.mobile-view-image {
  width: 100%;
  max-width: 15rem;
}
.woocommerce-wrapper li {
  margin-bottom: 2rem;
  line-height: 20px;
  font-family: 'Fogato';
  font-size: 135%;
  text-align: left;
  list-style: none;
  font-weight: 900;
  letter-spacing: 1px;
}
.woocommerce-wrapper__title {
  font-family: 'Fogato';
  width: 100%;
  font-style: italic;
  text-align: center;
  opacity: 80%;
}
.link__new {
  font-style: italic;
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
.woocommerce-wrapper__devices {
  display: flex;
  flex-flow: column;
  width: 50%;
  align-items: center;
}
</style>
