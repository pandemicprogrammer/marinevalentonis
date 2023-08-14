<script setup lang="ts">
import Collapsible from '@/components/Collapsible.vue';

</script>

<template>
  <div class="projects-view-wrapper">
    <Collapsible v-bind:collapsibleTitle="'PCT WooCommerce Marketplace Suite'">
      <div class="woocommerce-wrapper">
        <p class="woocommerce-wrapper__tech">Javascript  |  PHP  |  AJAX</p>
        <div class="woocommerce-wrapper__devices">
          <img class="mobile-view-image" src="https://marinevalentonis.com/wp-content/themes/zeever/assets/mobileView.png" alt="" />
        <img class="desktop-view-image" src="https://marinevalentonis.com/wp-content/themes/zeever/assets/desktopMarketplaceView.png" alt="" />
    </div>
        
        <div class="development-info">
              <ul>
                <li><sup class="link__new">New</sup> Client-side State Management</li>
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
    
     <Collapsible v-bind:collapsibleTitle="'PCT Wordpress Custom Shortcodes'">
      <div class="woocommerce-wrapper">
        <p class="woocommerce-wrapper__tech">Javascript  |  PHP  |  AJAX</p>
        <div class="woocommerce-wrapper__devices">
          <img class="portable-slate-image" src="https://marinevalentonis.com/wp-content/themes/zeever/assets/portableProduct.png" alt="" />
    </div>
        
        <div class="development-info">
              <ul>
                <li><sup class="link__new">New</sup> Custom API</li>
                <li><sup class="link__new">New</sup> WooCommerce Suite Integration</li>
                <li><sup class="link__new">New</sup> Custom Wordpress Dynamic Shortcode</li>
                <li><sup class="link__new">New</sup> Responsive Design</li>
              </ul>
            </div>
             <a class="marketplace-anchor" href="https://personcenteredtech.com/step-four-risk-analysis-and-mitigation/" target="_blank">Click Here To View Live
              </a>
            </div>
    </Collapsible>
     <Collapsible v-bind:collapsibleTitle="'PCT DevOps'">
      <div class="woocommerce-wrapper">  
                <p class="woocommerce-wrapper__tech">GitHub Actions  |  SSH Management  | Docker | Notion  </p>
                  <img class="deployment-image" src="https://marinevalentonis.com/wp-content/themes/zeever/assets/deployment.png" alt="" />
      
        <div class="development-info">
              <ul>
                <li><sup class="link__new">New</sup> Updated Action Workflows</li>
                <li><sup class="link__new">New</sup> Pre-Release Deployment Workflows</li>
                <li><sup class="link__new">New</sup> SSL Enabled Local Development Environment</li>
                <li><sup class="link__new">New</sup> CI/CD Automation</li>
                <li><sup class="link__new">New</sup> SDLC Establishment and Documentation</li>
              </ul>
            </div>
           
            </div>
    </Collapsible>
    <Collapsible v-bind:collapsibleTitle="'PCT Wordpress Migration and Stabilization'">
      <div class="woocommerce-wrapper">
        
        <div class="development-info">
              <ul>
                <li><sup class="link__new">New</sup> Dedicated Server</li>
                <li><sup class="link__new">New</sup> Site Plugin and Theme Updates</li>
                <li><sup class="link__new">New</sup> Security Update</li>
                <li><sup class="link__new">New</sup> Relational Database Management</li>
              </ul>
            </div>
            </div>
    </Collapsible>
  
    <Collapsible v-bind:collapsibleTitle="'PCT Custom Plugin'">
      <div class="woocommerce-wrapper">
        <p class="woocommerce-wrapper__tech">Vue  |  PHP  |  AJAX  |  MySQL</p>
        <div class="woocommerce-wrapper__devices">
    </div>
        
        <div class="development-info">
              <ul>
                <li><sup class="link__new">New</sup> MySQL Database Table</li>
              </ul>
            </div>
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
.portable-slate-image {
  width: 100%;
  max-width: 17rem;
}
.deployment-image {
  width: 100%;
  padding: .5rem;
}
</style>
