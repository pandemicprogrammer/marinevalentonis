
<script setup lang="ts">
import Collapsible from '@/components/Collapsible.vue';

</script>

<template>
  <div class="services-page-wrapper">
      <Collapsible collapsibleTitle="Frontend" >
        <div>
          <ul>
  <li>Vue.js</li>
  <li>Nuxt.js</li>
  <li>Typescript</li>
  <li>jQuery</li>
  <li>CSS/Sass</li>

</ul> 
 </div>
  <div>
          <ul>
    <li>Webpack</li>
    <li>Bootstrap</li>
    <li>Gulp</li>
    <li>Rollup</li>
</ul> 
 </div>
 </Collapsible>
   <Collapsible collapsibleTitle="Backend" >
        <div>
          <ul>
            <li>Python</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>Java - University Level</li>
          </ul> 
          </div>
            <div>
                    <ul>
            <li>Django</li>
            <li>Flask</li>
          </ul> 
          </div>
            </Collapsible>
              <Collapsible collapsibleTitle="DevOps" >
                <div>
                    <ul>
            <li>VCS: Git</li>
            <li>CI/CD: GitLab</li>
            <li>YAML Git Actions Build & Deployment Workflows</li>
          </ul> 
          </div>
            <div>
                    <ul>
            <li>AWS</li>
            <li>Containerization: Docker, Docker Compose</li>

          </ul> 
          </div>
   </Collapsible>
    <Collapsible collapsibleTitle="Wordpress" >
       <div>
          <ul>
            <li>Custom Themes</li>
            <li>Custom Plugins</li>
            <li>Taxonomies & Custom Post Types</li>
            <li>Wordpress REST API</li>
            <li>Woocommerce REST API</li>
          </ul> 
          </div>
            <div>
                    <ul>
            <li>Database Management</li>
            <li>Backup & Restore</li>
            <li>Custom Cart & Checkout</li>
            <li>Custom Shortcodes</li>
          </ul> 
          </div>
            </Collapsible>

    <Collapsible collapsibleTitle="REST API Development" >
       <div>
                    <ul>
            <li>AJAX</li>
            <li>JavaScript: ES6+</li>
          </ul> 
          </div>
            <div>
                    <ul>
            <li>Fetch API</li>
            <li>Nonce</li>
          </ul> 
          </div>
   </Collapsible>
    <Collapsible collapsibleTitle="General" >
       <div>
                    <ul>
            <li>Visual Studio Code</li>
            <li>BASH/Linux</li>
          </ul> 
          </div>
            <div>
                    <ul>
          </ul> 
          </div>
   </Collapsible>
</div>

</template>

<style>
  .cv-wrapper {
   text-align: left;
  }
.collapsible-content {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap-reverse;
}
.services-page-wrapper li {
  width: 12rem;
  font-family: 'Ashfiana Regular';
  font-size: 115%;
}
ul {
  padding: 1rem;
}
</style>

