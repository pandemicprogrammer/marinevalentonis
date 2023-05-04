<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
import TechTree from './components/TechTree.vue';

</script>

<template>
  
  <div class="main-page-wrapper">
    

    <RouterView />
  <div class="techtree-wrapper">
    <header>


          <nav class="nav-bar">
            <RouterLink to="/">Home</RouterLink>
            <RouterLink to="/cv">CV</RouterLink>
            <RouterLink to="/projects">Projects</RouterLink>
            <RouterLink to="/passions">Passions</RouterLink>
            <RouterLink to="/bettertogether">Better Together</RouterLink>
          </nav>
      </header>
      <img class="techtree-image" src="./assets/techtree.webp">
  </div> 
 </div>

 
</template>

<style scoped>
.nav-wrapper {
  height: 100%;
}
.main-page-wrapper {
  display: flex;
  align-items: center;
}
header {
  line-height: 5rem;
  max-height: 100vh;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

nav {
  width: 100%;
  font-size: 12px;
  text-align: center;
  margin-top: 2rem;
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
  border-left: 1px solid var(--color-border);
}

nav a:first-of-type {
  border: 0;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  nav {
    text-align: left;
    margin-left: -1rem;
    font-size: 1rem;
    padding: 1rem 0;
    margin-top: 7rem;
  }
}
.nav-bar {
  text-align: left;
  position: absolute;
  display: flex;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  flex-direction: column;}

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
</style>
