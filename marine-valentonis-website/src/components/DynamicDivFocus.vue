<template>
  <div
    :class="['dynamic-div-focus', classModifier]"
    @mouseenter="handleMouseEnter"
    @mouseleave="handleMouseLeave"
    :style="{
      '--content-x': x + 'px',
      '--content-y': y + 'px',
      '--content-width': width + 'px',
      '--content-height': height + 'px',
      '--content-x-right': x + width + 'px',
      '--content-y-bottom': y + height + 'px'
    }"
  >
    <div class="text-overlay" :class="{ 'hidden': !showOverlay, 'show-overlay': showOverlay }">
      <div class="text-content">
        <p>{{ overlayText }}</p>
      </div>
    </div>
    <!-- Add a div for the component's content -->
    <div class="component-content"></div>
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
  color: white;
  background:
    linear-gradient(black, black) top / 100% var(--content-y),
    linear-gradient(black, black) bottom / 100% calc(100% - var(--content-y-bottom)),
    linear-gradient(black, black) left / var(--content-x) 100%,
    linear-gradient(black, black) right / calc(100% - var(--content-x-right)) 100%;
  background-repeat: no-repeat;
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

/* Removed hover effects on component-content since they are not needed with the current approach */
</style>
