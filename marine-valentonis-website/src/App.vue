<script setup lang="ts">
import { ref } from 'vue'
import Services from './views/ServicesView.vue'
import Portfolio from './views/PortfolioView.vue'
import Passions from './views/PassionsView.vue'
import Community from './views/CommunityView.vue'
import PageFooter from './components/PageFooter.vue'; // Add this line



const currentPage = ref('home')

</script>

<template>
  <div class="main-page-wrapper">
    <div class="page-overlay"></div>
    <div class="static-content">
       <header class="main-header">
          <nav class="nav-bar">
            <!-- When these links are clicked, the currentPage property is updated -->
            <a href="#" class="nav-link home-link" @click.prevent="currentPage = 'services'">Services</a>
            <a href="#" class="nav-link projects-link" @click.prevent="currentPage = 'portfolio'">Development</a>
            <a href="#" class="nav-link passions-link" @click.prevent="currentPage = 'passions'">Passion</a>
            <a href="#" class="nav-link bettertogether-link" @click.prevent="currentPage = 'community'">Community</a>
          </nav>
      </header>
    </div>
    <div class="page-view-wrapper">
      <!-- The content displayed here will depend on the value of currentPage -->
      <Services v-if="currentPage === 'services'" />
      <!-- <Development v-else-if="currentPage === 'development'" /> -->
      <Portfolio v-else-if="currentPage === 'portfolio'" />
      <Passions v-else-if="currentPage === 'passions'" />
      <Community v-else-if="currentPage === 'community'" />
    </div>
    <PageFooter/>
  </div>
</template>

<style scoped>
@import '@/static/main.css';

.main-page-wrapper {
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
}
.main-header {
  width: 100%;
}
.page-view-wrapper {
  background-image: url('/wp-content/themes/zeever/assets/techtree.png');
  background-size: cover;
  background-position: center;
  border: solid 1rem rgb(0, 30, 38, .95);
  height: 100vh;
}
.static-content {
  width: -webkit-fill-available;
  display: flex;
  justify-content: center;
  flex-flow: column;
}
.tech-tree {
  margin-top: 3rem;  
  width:100%;
  position: fixed;
}
.nav-wrapper {
  height: 100%;
}
nav {
  width: 75%;
  text-align: center;
}

nav a.router-link-exact-active {
  color: white;
}

nav a.router-link-exact-active:hover {
  background-color: transparent;
}

nav a {
  display: inline-block;
  padding: 0 1rem;
}

nav a:first-of-type {
  border: 0;
}

.nav-bar {
  padding: 1rem;
  font-size: 100%;
  z-index: 100;
  text-align: center;
  width:100%;
  border-radius: 3px;
  background: rgb(0, 30, 38, .95);
}

.techtree-wrapper {
  width: 100%;
  text-align: center;
  background: #001a24;
  background: radial-gradient(#001e26, #040310);
  border-radius: 6px;
}
.nav-link {
  font-family: 'Blankers';
  font-size: 200%;
  white-space: nowrap;

}
.nav-link:active,
.nav-link:focus {
  font-weight: bold;
}
</style>
