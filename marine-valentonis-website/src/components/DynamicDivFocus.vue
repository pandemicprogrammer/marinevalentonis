<!-- DynamicDivFocus.vue -->
<template>
  <div
    :class="['dynamic-div-focus', classModifier]"
    :style="{ top: y + 'px', left: x + 'px', width: width + 'px', height: height + 'px' }"
    @mouseenter="handleMouseEnter"
    @mouseleave="handleMouseLeave"
  >
    <div class="overlay" v-if="showOverlay">
      <div class="content">
        <p>{{ overlayText }}</p>
      </div>
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
}

.overlay {
  /* Overlay styles */
}

.content {
  /* Overlay content styles */
}
</style>
