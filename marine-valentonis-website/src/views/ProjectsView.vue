<script setup lang="ts">
import RuneCaster from '@/components/RuneCaster.vue';
// import TechTree from './components/TechTree.vue';

</script><template>
  <div class="projects-view-wrapper">
    <RuneCaster/>
    <div class="projects-nav">
      <div class="woocommerce-suite">WooCommerce PCT Marketplace</div>
      <div class="woocommerce-suite">WooCommerce PCT Cart Modal</div>
      <div class="woocommerce-suite">PCT Teletherapy Rules Mapper</div>
      <div class="woocommerce-suite">HealthPossible</div>
    </div>
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
