<script setup lang="ts">
import Collapsible from '@/components/Collapsible.vue';
</script>

<template>
  <div class="services-page-wrapper">
    <Collapsible collapsibleTitle="Proficient Skills">
      <div class="skills-wrapper">
        <div class="skill-list">
          <h1 class="skill-list__title">Frontend</h1>

          <ul>
            <li>Vue </li>
            <li>Nuxt</li>
            <li>Javascript</li>
            <li>Typescript</li>
            <li>jQuery</li>
            <li>CSS</li>
            <li>Sass</li>
            <li>HTML</li>
            <li>Webpack</li>
            <li>Bootstrap</li>
            <li>Gulp</li>
            <li>Rollup</li>
          </ul>
        </div>
        <div class="skill-list">
          <h1 class="skill-list__title">Backend</h1>

          <ul>
            <li>Python</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>Django</li>
            <li>Flask</li>
          </ul>
        </div>
        <div class="skill-list">
          <h1 class="skill-list__title">DevOps</h1>
          <ul>
            <li>GitHub</li>
            <li>CI CD</li>
            <li>GitHub Actions Build & Deployment Workflows</li>
            <li>SDLC Establishment and Documentation</li>
            <li>Docker</li>
          </ul>
        </div>
        <div class="skill-list">
          <h1 class="skill-list__title">Wordpress</h1>

          <ul>
            <li>Custom Themes</li>
            <li>Custom Plugins</li>
            <li>Taxonomies and Custom Post Types</li>
            <li>Wordpress REST API</li>
            <li>Woocommerce REST API</li>
            <li>Relational Database Management</li>
            <li>Backup and Restore</li>
            <li>Custom Cart and Checkout</li>
            <li>Custom Shortcodes</li>
          </ul>
        </div>
        <div class="skill-list">
          <h1 class="skill-list__title">API Development</h1>

          <ul>
            <li>AJAX</li>
            <li>JavaScript</li>
            <li>Fetch</li>
            <li>Nonce</li>
          </ul>
        </div>
        <div class="skill-list">
                    <h1 class="skill-list__title">General</h1>

          <ul>
            <li>Visual Studio Code</li>
            <li>Linux</li>
            <li>Notion</li>
            <li>Slack</li>
          </ul>
        </div>
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
    flex-wrap: wrap;
  }
  .services-page-wrapper li {
    width: 12rem;
    font-family: 'Fogato';
    font-size: 125%;
    letter-spacing: 1px;
    font-weight: 900;
  }
  .skill-list {
    width: 50%;
    padding: 1rem;
  }
  .skills-wrapper {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  .skill-list__title {
    font-size: 125%;
    font-family: 'Blankers';
  }
</style>
