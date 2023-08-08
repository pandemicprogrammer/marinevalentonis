<template>
  <div
    :class="['dynamic-div-focus', classModifier]"
    @mouseenter="handleMouseEnter"
    @mouseleave="handleMouseLeave"
  >
    <div class="text-overlay" :class="{ 'hidden': !showOverlay, 'show-overlay': showOverlay }">
      <div class="text-content">
        <p>{{ overlayText }}</p>
      </div>
    </div>
    <!-- Add a div for the component's content -->
    <div
      class="component-content"
      :style="{ top: y + 'px', left: x + 'px', width: width + 'px', height: height + 'px' }"
    >
      <!-- Your component content goes here -->
    </div>
  </div>
</template>

<script setup lang="ts">
import { defineProps, ref } from 'vue';

const props = defineProps(['overlayText', 'x', 'y', 'width', 'height', 'classModifier']);
const showOverlay = ref(false);

function handleMouseEnter() {
  showOverlay.value = true;
}

function handleMouseLeave() {
  showOverlay.value = false;
}
</script>

<style>
.dynamic-div-focus {
  position: absolute;
  width: 100%;
  height: 100vh;
}

.hidden {
  display: none !important;
}

.text-overlay {
  display: flex;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  align-items: center;
  justify-content: center;
  opacity: 0.8;
  transition: opacity 0.3s ease;
  z-index: 1;
  background-color: black;
  color: white;
}

.show-overlay {
  opacity: 1;
}

.component-content {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 2;
  
}

/* Show the overlay when component-content is hovered */
.component-content:hover + .text-overlay {
  display: flex;
  opacity: 1;
}

/* Add the 'hidden' class back when component-content is not hovered */
.component-content:not(:hover) + .text-overlay {
  display: none;
}
</style>
