<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'

</script>

<template>
  
  <div class="main-page-wrapper">
    <div class="page-overlay"></div>
    <div class="static-content">
       <header class="main-header">
          <nav class="nav-bar">
            <RouterLink to="/services" class="nav-link home-link">Services</RouterLink>
            <RouterLink to="/development" class="nav-link cv-link">Development</RouterLink>
            <RouterLink to="/projects" class="nav-link projects-link">Projects</RouterLink>
            <RouterLink to="/passions" class="nav-link passions-link">Passions</RouterLink>
            <RouterLink to="/community" class="nav-link bettertogether-link">Community</RouterLink>
          </nav>
      </header>
    </div>
   <div class="page-view-wrapper">
        <RouterView />
      </div>
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
  background-image: url('marinevalentonis.com/wp-content/uploads/2023/techtree.webp');
  background-size: cover;
  background-position: center;
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
  font-size: 175%;
  white-space: nowrap;

}
.nav-link:active,
.nav-link:focus {
  font-weight: bold;
}
</style>
