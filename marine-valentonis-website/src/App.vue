<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
// import TechTree from './components/TechTree.vue';

</script>

<template>
  
  <div class="main-page-wrapper">
    <div class="static-content">
       <header class="main-header">
          <nav class="nav-bar">
            <RouterLink to="/" class="nav-link home-link">Home</RouterLink>
            <RouterLink to="/cv" class="nav-link cv-link">CV</RouterLink>
            <RouterLink to="/projects" class="nav-link projects-link">Projects</RouterLink>
            <RouterLink to="/passions" class="nav-link passions-link">Passions</RouterLink>
            <RouterLink to="/bettertogether" class="nav-link bettertogether-link">Better Together</RouterLink>
          </nav>
      </header>
      <div class="page-view-wrapper">
        <RouterView />
        <img class="tech-tree"  src="./assets/techtree.webp" alt="">
      </div>
    </div>
   
 </div>

 
</template>

<style scoped>
@import '@/assets/main.css';
.static-content {
  width: -webkit-fill-available;
  display: flex;
  justify-content: center;
  flex-flow: column;
}
.tech-tree {
  width:75%;
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

@media (min-width: 1024px) {
  header {
    place-items: center;
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  nav {
    text-align: left;
    font-size: 1rem;
    
  }
}
.nav-bar {
  font-size: 50%;
  z-index: 100;
  text-align: center;
  display: flex;
  justify-content: space-evenly;
}

.techtree-wrapper {
  width: 100%;
  text-align: center;
  background: #001a24;
  background: radial-gradient(#001e26, #040310);
  border-radius: 6px;
}
.techtree-image {    
  width: 84%;
  border-radius: 14rem;
  border: solid 1rem rgb(0, 26, 36, 8%);
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
